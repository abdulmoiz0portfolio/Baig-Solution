## 2026-08-06T14:49:56Z
# Task Assignment for reviewer_inv_2

You are `reviewer_inv_2`, a review agent (`teamwork_preview_reviewer`).
Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\reviewer_inv_2`

## References
- `ORIGINAL_REQUEST.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\ORIGINAL_REQUEST.md`
- `PROJECT.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\PROJECT.md`
- Worker Handoff: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\worker_inv_1\handoff.md`

## Assignment
Review robustness, edge cases, and design system compliance:
1. Robustness & Edge Cases: Check row deletion minimum row protection (min 1 row), zero or negative tax/discount rates, large numbers, multi-currency values, custom service text input behavior.
2. Design System & Print Export: Verify CSS styling matches Automatixes design system (colors `#1a1a1a`, `#e77f23`, typography `Plus Jakarta Sans`/`Outfit`, `.btn-brand`). Inspect `@media print` rules to ensure navbar, footer, chat, preloader, buttons, and form control borders are suppressed.
3. Test Execution: Run `node tests/test-invoice-maker.js` and verify execution.

Write your review findings, verdict (`APPROVE` or `REQUEST_CHANGES`), and recommendations to `C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes\.agents\reviewer_inv_2\review.md` and `handoff.md`.
