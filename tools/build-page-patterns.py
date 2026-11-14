"""Build the six starter-site page patterns from their templates.

Each starter site (Business, News, Magazine, Portfolio, Writer, Personal) is a page template whose
pattern holds a "Masthead with Gradient" section (header + hero), the page's <main>, and a footer part.
Its page pattern is the same page without the header and footer: the masthead minus its header group,
then the body with <main> turned into a plain group (the page template already has a <main>).

Page patterns declare `Post Types: page, wp_template` and `Block Types: core/post-content`, so WordPress
offers them when someone creates a new page.

Run after any change to patterns/business.php, news.php, magazine.php, portfolio.php, writer.php or
personal.php:  python3 tools/build-page-patterns.py
"""
import os
import re

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

PAGES = {
    "business": "The Landmark studio introduces itself: hero, services, clients, how it works, team, a testimonial and pricing.",
    "news": "Parallel's front page: a featured story, the latest news, the archive and a newsletter sign-up.",
    "magazine": "Almanac's front page: the current issue, a filter by category, the people who make it and the archive.",
    "portfolio": "Cora Vale's portfolio: a short profile, selected work, awards, years of experience and a playlist.",
    "writer": "Iris Calder's home: a portrait, a new book and its reviews, then writings, books and talks.",
    "personal": "Ada Fenn's home: a portrait, selected builds and the latest posts.",
}

HEADER_GROUP = re.compile(
    r'<!-- wp:group \{[^\n]*\} -->\n<div class="wp-block-group[^"]*"><!-- wp:template-part \{[^\n]*"area":"header"\} /--></div>\n<!-- /wp:group -->\n\n'
)


def build(slug, description):
    src = open(os.path.join(ROOT, "patterns", f"{slug}.php"), encoding="utf-8").read()
    body = src.split("?>\n", 1)[1]
    start = body.index('<!-- wp:group {"tagName":"section","metadata":{"name":"Masthead with Gradient"}')
    end = body.index("<!-- wp:template-part ", body.index("</main>"))
    page = body[start:end].rstrip() + "\n"

    page, n = HEADER_GROUP.subn("", page, count=1)
    assert n == 1, f"{slug}: header group not found inside the masthead"
    assert page.count('"tagName":"main"') == 1 and page.count("</main>") == 1, f"{slug}: expected one <main>"
    page = page.replace('<!-- wp:group {"tagName":"main",', "<!-- wp:group {", 1)
    page = re.sub(r'<main class="wp-block-group', '<div class="wp-block-group', page, count=1)
    page = page.replace("</main>", "</div>", 1)
    assert "wp:template-part" not in page, f"{slug}: a template part is left in the page"

    header = (
        "<?php\n/**\n"
        f" * Title: Page, {slug}\n"
        f" * Slug: metis/page-{slug}\n"
        " * Categories: pages\n"
        " * Post Types: page, wp_template\n"
        " * Block Types: core/post-content\n"
        " * Viewport Width: 1400\n"
        f" * Description: {description}\n"
        " */\n?>\n"
    )
    out = os.path.join(ROOT, "patterns", f"page-{slug}.php")
    open(out, "w", encoding="utf-8").write(header + page)
    return out


if __name__ == "__main__":
    for slug, description in PAGES.items():
        print(os.path.relpath(build(slug, description), ROOT))
