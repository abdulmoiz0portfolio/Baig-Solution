# Project: Custom Mouse Cursor Effect (QClay Redesign)

## Architecture
- **DOM Structure**: Global `<div class="mouse-cursor cursor-outer" aria-hidden="true"></div>` and `<div class="mouse-cursor cursor-inner" aria-hidden="true"></div>` in `header.php` (lines 225–226) and `index.html` (lines 103–104).
- **Styling Architecture**: `assets/css/main.css` Section 06.1 defining `.mouse-cursor`, `.cursor-inner`, `.cursor-outer`, `.cursor-hover`, hover states with site accent `#e77f23`, subtle backdrop blur, and touch suppression `@media (hover: none) and (pointer: coarse)`.
- **Interaction Architecture**: `assets/js/main.js` `initCustomCursor()` utilizing `gsap.quickTo` coordinate pipelines for smooth 120fps trailing lag, mouseenter/mouseleave window boundary handling, event delegation for `.nav-link`, `.btn`, `[data-cursor]`, and `window.cursorFollower` export.

## Feature Inventory
| # | Feature | Description | Milestone | Source | Status |
|---|---------|-------------|-----------|--------|--------|
| 1 | Visual Elements | Ensure `.cursor-outer` and `.cursor-inner` DOM elements exist with `aria-hidden="true"` | M1 | ORIGINAL_REQUEST §1 | DONE |
| 2 | CSS Styling | Define outer ring (semi-transparent, subtle blur, `pointer-events: none`) and inner solid dot | M1 | ORIGINAL_REQUEST §2 | DONE |
| 3 | Touch Suppression | Hide cursor elements under `@media (hover: none) and (pointer: coarse)` | M1 | ORIGINAL_REQUEST §2 | DONE |
| 4 | JS Trailing Tracking | Smooth trailing lag using `requestAnimationFrame` / `gsap.quickTo` tracking `mousemove` | M2 | ORIGINAL_REQUEST §3 | DONE |
| 5 | Hover Interactions | Enlarge outer cursor and shift color to `#e77f23` on hover over `.nav-link`, `.btn`, `[data-cursor]` | M2 | ORIGINAL_REQUEST §3 | DONE |
| 6 | Performance & API | <5% frame-time impact, 0 console errors, `window.cursorFollower` export, cross-browser compatibility | M2 | ORIGINAL_REQUEST §4 | DONE |
| 7 | Full Verification | Pass E2E test runner suite, Reviewer approval, Challenger testing, Forensic Integrity Audit | M3 | System Workflow | DONE |

## Milestones
| # | Name | Scope | Dependencies | Status |
|---|------|-------|-------------|--------|
| 1 | M1: DOM & CSS Cursor Styling | Verify DOM in `header.php`/`index.html`, style `.cursor-inner`, `.cursor-outer`, `#e77f23` accent, subtle blur, `pointer-events: none`, touch media queries in `assets/css/main.css` | none | DONE |
| 2 | M2: JS Tracking & Hover Logic | Update `assets/js/main.js` `initCustomCursor()` with `gsap.quickTo` / rAF, hover delegation on `.nav-link`, `.btn`, `[data-cursor]`, window boundary events, export `window.cursorFollower` | M1 | DONE |
| 3 | M3: Verification & Auditing | Run full test suite (`node tests/e2e-test-runner.js`), Reviewer verification, Challenger empirical stress test, Forensic integrity audit | M1, M2 | DONE |

## Interface Contracts
### `assets/css/main.css` ↔ `assets/js/main.js`
- Classes toggled by JS: `.cursor-hover`, `.cursor-hidden`, `.cursor-active`, `.cursor-outer`, `.cursor-inner`, `.cursor-view`, `.cursor-drag`, `.cursor-magnetic`.
- CSS properties: `pointer-events: none` on `.mouse-cursor`, `z-index: 999998` on `.cursor-outer`, `z-index: 999999` on `.cursor-inner`.
- Hover style: Accent color `#e77f23` applied during hover states.

### `assets/js/main.js` ↔ External Environment / Tests
- Global API: `window.cursorFollower = { outer, inner, xOuter, yOuter, xInner, yInner, setHover, resetHover, show, hide, moveTo }`.
- Performance: <1% frame-time overhead (<0.01ms/frame), 0 memory allocations in `mousemove`.

## Code Layout
- `header.php`: Global HTML header with `<div class="mouse-cursor cursor-outer" aria-hidden="true"></div>` & `<div class="mouse-cursor cursor-inner" aria-hidden="true"></div>`.
- `index.html`: Static HTML fallback with identical cursor elements.
- `assets/css/main.css`: Primary styling (Section 06.1 Custom Cursor lines 557–713, and cleaned Section 10.2 lines 1968–1996).
- `assets/js/main.js`: Main JavaScript logic (lines 669–826 `initCustomCursor()`).
- `tests/e2e-test-runner.js`: Verification test runner.
