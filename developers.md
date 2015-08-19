# Developer Notes

## `dev-css-arch`

is a mini-development branch, off of `dev`. It is not a feature branch.
This branch is concerned with the overall structure and architecture
of the css codebase. It is not concerned with minor style issues or changes.

You should commit to `dev-css-arch` if during your work you would ask
any of the following questions:
- where does this ruleset go?
- what should we name this class, and what does this name convey to other developers?
How does this name relate to other classnames?
- what *kind* of class is this class? Is it a tool? object? component? helper? utility?
- how many times is `h1`, `h2`, `p`, `a`, `li`, `td`, etc. being redefined?
- are we nesting selectors because child *belongs* in its parent, or only because
it *happens* to be inside its containing element?
- what order do these selectors belong in? is that going to affect the cascade?
- why are these two elements very similar but not exactly identical?
- should we override a previously-defined class or should we just define a new class?

You should *not* commit to `dev-css-arch` if you would ask any of these:
- how should this element be styled?
- does this margin, padding, font-weight, color, etc. need to be adjusted?
- should we use `!important` here?
- can I use a qualifier (e.g. `a.link` instead of `.link`) to
override specificity in order to make this fix?
