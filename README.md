# WP Classic Editor Save Shortcut

Maps **⌘S / Ctrl+S** in the **WordPress Classic Editor** to **Save / Update / Publish** – while preventing the browser’s default “Save Page” dialog.

---

## Features
- ⌘S (Mac) / Ctrl+S (Windows) triggers **Save**
- Prefers **Save Draft** (`#save-post`), falls back to **Update/Publish** (`#publish`) if not available
- Small hint below the publishing actions (“Tip: ⌘S / Ctrl+S …”)
- Zero-config, no settings required. Can be disabled via filter.

---

## Installation
1. Create a folder: `wp-classic-editor-save-shortcut/`
2. Copy the file `wp-classic-editor-save-shortcut.php` into it (see above)
3. Zip the folder and upload it via **Plugins → Add New → Upload Plugin**
4. Activate – done ✅

---

## Compatibility
- Optimized for the **Classic Editor** UI. Works on `post-new.php` and `post.php` – covering posts, pages, and custom post types.  
- The **Block Editor (Gutenberg)** already has its own shortcut behavior; this plugin is explicitly aimed at the Classic Editor interface.

---

## FAQ

**Q: Can I force it to always use “Save Draft”?**  
A: Yes. Just remove the fallback logic for `#publish` in the code.  

**Q: Does it also work when the cursor is inside the editor field?**  
A: Yes. The keyboard shortcut is intercepted globally and the browser dialog is suppressed.  

**Q: Does it work with all themes/plugins?**  
A: As long as the standard IDs `#save-post` / `#publish` are present (Classic UI), yes.  

---

## Changelog
**1.0.0** – Initial release  

---

## License

This plugin is free software, released under the  
**GNU General Public License v2 or later (GPL-2.0-or-later).**

See: [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
