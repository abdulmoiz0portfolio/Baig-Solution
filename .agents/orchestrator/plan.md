# Execution Plan — n8n Chat Toggle Logic Fix

## Overview
Fix the n8n chat toggle logic on the Automatixes website so that the custom "Connect with an Expert" button reliably opens the chat, and the custom "✖" button reliably closes it, overcoming Vue.js event suppression. Perform automated verification.

## Milestones

### Milestone 1: Exploration & Requirements Mining
- Dispatch Explorers (`teamwork_preview_explorer` / `teamwork_preview_spec_miner`) to investigate codebase, inspect how n8n chat widget is embedded, locate Vue.js event suppression issues, and document feature inventory / project structure in `PROJECT.md`.

### Milestone 2: Implementation (Chat Toggle Open & Close Fix)
- Dispatch Worker (`teamwork_preview_worker`) to implement reliable open/close logic for n8n chat widget, handling Vue.js event suppression appropriately.

### Milestone 3: Verification & Auditing
- Dispatch Reviewers (`teamwork_preview_reviewer`) to verify code quality and functionality.
- Dispatch Challengers (`teamwork_preview_challenger`) for automated end-to-end open/close verification (using agent-browser or test runner).
- Dispatch Forensic Auditor (`teamwork_preview_auditor`) for integrity audit.

### Milestone 4: Gate Approval & Synthesis
- Evaluate gate status. Ensure clean audit and approve milestone.
- Synthesize findings and report results.
