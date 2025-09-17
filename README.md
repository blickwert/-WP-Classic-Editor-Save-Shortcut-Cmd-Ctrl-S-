# WP Classic Editor Save Shortcut

Mappt **⌘S / Ctrl+S** im **WordPress Classic Editor** auf **Speichern/Aktualisieren/Veröffentlichen** – verhindert zugleich den Browser-Dialog „Seite speichern“.

## Features
- ⌘S (Mac) / Ctrl+S (Windows) löst **Speichern** aus
- Bevorzugt **Entwurf speichern** (`#save-post`), fällt andernfalls auf **Aktualisieren/Veröffentlichen** (`#publish`) zurück
- Kleiner Hinweistext unter den Publishing-Aktionen („Tipp: ⌘S/Ctrl+S …“)
- Zero-Config, keine Settings. Kann via Filter deaktiviert werden.

## Installation
1. Ordner erstellen: `wp-classic-editor-save-shortcut/`
2. Datei `wp-classic-editor-save-shortcut.php` hinein kopieren (siehe oben)
3. Ordner als ZIP packen und über **Plugins → Installieren → Plugin hochladen** einspielen
4. Aktivieren. Fertig.

## Kompatibilität
- Optimiert für den **Classic Editor** (klassische Bearbeitungsoberfläche). Funktioniert auf `post-new.php` und `post.php` – somit für Beiträge, Seiten und Custom Post Types.
- Für den Block Editor (Gutenberg) ist bereits ein eigenes Shortcut-Verhalten vorhanden; dieses Plugin zielt explizit auf die klassische Oberfläche.

## Filter
```php
// Plugin global deaktivieren:
add_filter( 'wcess_enable_shortcut', '__return_false' );

## Fragen und Antworten

F: Kann ich erzwingen, dass immer „Entwurf speichern“ genutzt wird?
A: Ja. Im Code einfach die Fallback-Logik für #publish entfernen.

F: Greift das auch, wenn der Cursor im Editor-Feld ist?
A: Ja. Die Tastenkombination wird global abgefangen und der Browser-Dialog unterdrückt.

F: Funktioniert das mit allen Themes/Plugins?
A: Solange die Standard-IDs #save-post / #publish vorhanden sind (Classic UI), ja.

## Changelog
1.0.0 Erste Veröffentlichung

## Lizenz

Dieses Plugin ist freie Software, veröffentlicht unter der
GNU General Public License v2 oder später (GPL-2.0-or-later).

Siehe: https://www.gnu.org/licenses/gpl-2.0.html
