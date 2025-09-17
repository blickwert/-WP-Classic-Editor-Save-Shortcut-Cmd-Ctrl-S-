# WP Classic Editor – Save Shortcut (Cmd/Ctrl + S)

Bringt dem **WordPress Classic Editor** die gewohnte `Cmd/Ctrl + S`-Speichern-Funktion bei.  
Statt des Browser-Dialogs löst der Shortcut den **Speichern/Veröffentlichen/Aktualisieren**-Button im Classic Editor aus.

> ✅ Funktioniert im Classic Editor (TinyMCE).  
> ⚠️ Für den Block Editor (Gutenberg) ist dieses Plugin **nicht** gedacht.

---

## Features

- `Cmd + S` (macOS) / `Ctrl + S` (Windows) 👉 Klickt automatisch auf **Veröffentlichen/Aktualisieren**
- `Cmd/Ctrl + Shift + S` 👉 versucht **Entwurf speichern** (`#save-post`), fällt sonst auf Veröffentlichen/Aktualisieren zurück
- Greift **nur** auf `post-new.php` und `post.php` (Classic Editor) ein
- Blockiert zuverlässig den Browser-Dialog „Seite speichern“

---

## Installation

1. Ordner anlegen: `wp-classic-save-shortcut/`
2. Datei `wp-classic-save-shortcut.php` in diesen Ordner legen (siehe unten).
3. Projekt in `wp-content/plugins/wp-classic-save-shortcut/` ablegen.
4. Im WP-Admin unter **Plugins** aktivieren.

> Alternativ als MU-Plugin: Datei nach `wp-content/mu-plugins/` legen, Name z. B. `wp-classic-save-shortcut.php` – aktiviert sich automatisch.

---

## Nutzung

- Im Classic Editor `Cmd/Ctrl + S` drücken → Beitrag wird **veröffentlicht/aktualisiert**.
- Mit **Shift** zusätzlich (`Cmd/Ctrl + Shift + S`) → **Entwurf speichern** (falls Button vorhanden).

---

## Einschränkungen

- **Gutenberg/Block Editor** hat eigene Shortcuts und UI – hier greift das Plugin nicht.
- Im Quick Draft Widget (Dashboard) derzeit **ohne** Funktion.

---

## Kompatibilität

- WordPress 5.2+ (getestet bis 6.6)
- PHP 7.4 – 8.3
- Classic Editor Plugin optional, aber empfohlen

---

## Changelog

### 1.0.0
- Erste Veröffentlichung

---

## Lizenz

MIT
