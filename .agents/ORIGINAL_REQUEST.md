# Original User Request

## Initial Request — 2026-08-18T15:06:15Z

Replace the two decorative background SVGs in the hero section of `index.php` and `index.html` with distinct, low-opacity background illustrations representing an automation stack.

Working directory: C:\Users\Moiz Baig\.gemini\antigravity\scratch\automatixes.com

## Requirements

### R1. Left Side SVG (n8n workflow)
Create an inline SVG representing an n8n workflow (3-4 small circular/square nodes connected by thin lines). 
- Must use low opacity (12-18%).
- Colors: lime-green (`#a3e635` or `#C8E019`) and white/gray tones only.
- It must act as a background texture, not a visible UI widget (no borders/cards).

### R2. Right Side SVG (CRM/Make stack)
Create a second, distinct inline SVG representing a broader automation/CRM stack (connected placeholder icons/nodes).
- Same opacity (12-18%) and color restrictions (lime-green + white/gray).
- Must be visually distinct from the left SVG.

### R3. Placement & Responsiveness
Keep the new SVGs in the exact same positioning containers as the existing ones. Do not overlap text, CTAs, or the chat widgets. Ensure it is responsive (e.g., hidden on mobile or properly scaled using existing classes like `d-none d-lg-block`).

## Acceptance Criteria

### Implementation
- [ ] Left SVG is replaced with an n8n-style node diagram in `index.php` and `index.html`.
- [ ] Right SVG is replaced with a CRM/Make-style node diagram in `index.php` and `index.html`.
- [ ] Both SVGs have 12-18% opacity.
- [ ] Colors used are restricted to lime-green and white/gray.
- [ ] SVGs are pure background illustrations without text or UI card borders.
- [ ] The hero section layout, headlines, and buttons remain intact and unshifted.
