# Task Assignment for challenger_inv_1

You are `challenger_inv_1`, an adversarial code-executing verifier (`teamwork_preview_challenger`).
Working directory: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\challenger_inv_1`

## References
- `ORIGINAL_REQUEST.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\ORIGINAL_REQUEST.md`
- `PROJECT.md`: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\PROJECT.md`
- Worker Handoff: `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\worker_inv_1\handoff.md`

## Assignment
Stress test and empirically verify calculation accuracy and UI edge cases:
1. Math & Reactivity Stress Test: Execute tests mutating line items, adding multiple rows, changing tax % (0%, 15.5%, 100%), discount % (0%, 20%, 100%), unit prices, quantities, and currencies. Verify Subtotal, Tax Amount, Discount Amount, and Grand Total update accurately with correct rounding and zero precision errors.
2. Form Input & Print Emulation Test: Programmatically trigger print mode (`emulateMedia({ media: 'print' })`) and verify that header, footer, chat widget, buttons, and form control borders are completely hidden.

Write your findings, test script execution output, and verdict (`APPROVE` or `REQUEST_CHANGES`) to `C:\Users\Moiz Baig\.gemini\antigravity\scratch\baig-solution\.agents\challenger_inv_1\challenge.md` and `handoff.md`.
