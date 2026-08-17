## 2026-08-16T19:49:17Z
You are Worker 1 for Milestone 1 (Design System & Dark Foundation) of the QClay Redesign Project.
Your working directory is C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\worker_m1_1
Target Project Root: C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign

Read the following files before starting:
- C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\ORIGINAL_REQUEST.md
- C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\PROJECT.md
- C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\sub_orch_m1\SCOPE.md
- Explorer Reports & Blueprints:
  * C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\explorer_m1_1\report.md
  * C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\explorer_m1_2\report.md
  * C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\explorer_m1_3\report.md
- Target Files to modify (Exclusive Write Ownership):
  * C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\header.php
  * C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\assets\css\main.css

MANDATORY INTEGRITY WARNING:
DO NOT CHEAT. All implementations must be genuine. DO NOT hardcode test results, create dummy/facade implementations, or circumvent the intended task. A auditor will independently verify your work. Integrity violations WILL be detected and your work WILL be rejected.

Scope & Implementation Instructions:
1. `header.php`:
   - Ensure Google Fonts link includes all required weights: `Space Grotesk:wght@400;500;600;700` and `Inter:wght@300;400;500;600;700`.
   - Ensure preconnect tags to `fonts.googleapis.com` and `fonts.gstatic.com` are present.
   - Verify cursor follower DOM elements `<div class="mouse-cursor cursor-outer" aria-hidden="true"></div><div class="mouse-cursor cursor-inner" aria-hidden="true"></div>` exist in the DOM right after `<body>`.
   - Preserve all existing SEO meta tags, OpenGraph, JSON-LD schemas, security wrappers, and script links.

2. `assets/css/main.css`:
   - Implement the complete Obsidian Abyss token palette on `:root`:
     `--bg-void: #050505;`, `--bg-base: #0a0a0a;`, `--bg-surface-1: #111113;`, `--bg-surface-2: #18181b;`, `--border-subtle: rgba(255, 255, 255, 0.08);`, `--border-bright: rgba(204, 255, 0, 0.3);`
     `--accent-neon: #ccff00;`, `--accent-neon-bright: #d4ff00;`, `--accent-emerald: #00ff88;`, `--accent-neon-glow: rgba(204, 255, 0, 0.15);`
     `--text-primary: #ffffff;`, `--text-secondary: #94a3b8;`, `--text-muted: #64748b;`
   - Purge all legacy teal `#0B4550` and `#0D6171` overrides and duplicate `:root` blocks.
   - Implement fluid typography scale on `:root` and utility classes:
     `--font-heading: 'Space Grotesk', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;`
     `--font-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;`
     `--font-hero: clamp(3.75rem, 8.8vw, 9.5rem);` with `letter-spacing: -0.045em; line-height: 0.92;`
     `--font-display-1: clamp(3rem, 7vw, 7.5rem);`
     `--font-display-2: clamp(2.5rem, 5.8vw, 5.5rem);`
     `--font-display-3: clamp(1.75rem, 3.5vw, 3.25rem);`
     Apply `--font-heading` to `h1, h2, h3, h4, h5, h6, .font-heading, .font-hero, .font-display` elements.
   - Implement negative space system on `:root`:
     `--section-space: clamp(140px, 16vh, 220px);` (>150px vertical spacing on desktop).
     Provide utility classes: `.section-qclay`, `.py-huge`, `.my-huge`, `.pt-huge`, `.pb-huge`, `.section-padding`.
     Include responsive adjustments for mobile/tablet.
   - Base resets & utilities:
     `*, *::before, *::after { box-sizing: border-box; }`
     `html { scroll-behavior: auto; }` (Lenis-safe)
     `::selection { background-color: var(--accent-neon); color: #000000; }`
     Custom dark scrollbar styling.
   - Interface contracts for downstream milestones:
     Base classes for `.mouse-cursor`, `.cursor-outer`, `.cursor-inner`, `.btn-magnetic`, `.btn-magnetic-inner`, `.badge-pill`, `.card-glass`, `.glow-accent`.
   - Preserve existing functional classes and styling for n8n chat, ElevenLabs voice widget, Firebase forms, and invoice maker print rules.

3. Build & Test Verification:
   - Run verification checks (e.g. check syntax, verify file contents, verify no legacy `#0B4550` remains in `main.css`).
   - Run any existing test commands or local server checks if available.

Write your changes to `header.php` and `assets/css/main.css`.
Write your full implementation report to `C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\worker_m1_1\report.md` and handoff to `C:\Users\Moiz Baig\.gemini\antigravity\scratch\qclay-redesign\.agents\worker_m1_1\handoff.md`.
Notify this orchestrator via send_message when done.
