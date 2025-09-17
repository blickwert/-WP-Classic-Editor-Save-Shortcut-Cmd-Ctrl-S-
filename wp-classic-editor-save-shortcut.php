<?php
/**
 * Plugin Name:       WP Classic Editor Save Shortcut
 * Description:       Nutzt ⌘S / Ctrl+S im Classic Editor zum Speichern/Aktualisieren (statt Browser-„Seite speichern“).
 * Version:           1.0.0
 * Author:            Dav & ChatGPT
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Text Domain:       wp-classic-editor-save-shortcut
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Output inline JS only on post edit screens that use the Classic Editor UI.
 * We attach in admin_footer for post-new.php and post.php which cover posts, pages, and CPTs.
 */
add_action( 'admin_footer-post-new.php', 'wcess_output_shortcut_script' );
add_action( 'admin_footer-post.php',      'wcess_output_shortcut_script' );

function wcess_output_shortcut_script() {
    // Allow disabling via filter if needed.
    $enabled = apply_filters( 'wcess_enable_shortcut', true );
    if ( ! $enabled ) { return; }
    ?>
    <script>
    (function(){
        // Helper: is element visible to the user
        function isVisible(el){
            return !!(el && el.offsetParent !== null && !el.disabled);
        }

        // Resolve the best button to click depending on post status
        function getSaveButton(){
            // Prefer explicit "Save Draft" when available/visible
            var saveDraft = document.querySelector('#save-post');
            if(isVisible(saveDraft)) return saveDraft;
            // Fallback to Update/Publish
            var publish = document.querySelector('#publish');
            if(isVisible(publish)) return publish;
            return null;
        }

        // Prevent browser Save dialog and trigger WP action
        document.addEventListener('keydown', function(e){
            // Ignore inputs where the browser may handle save (but we still want global)
            var meta = e.metaKey || e.ctrlKey;
            var keyS = (e.key && e.key.toLowerCase() === 's') || e.keyCode === 83;
            if(!meta || !keyS) return;
            e.preventDefault();
            var btn = getSaveButton();
            if(btn){
                // Visual feedback: flash the button
                try { btn.classList.add('button-primary'); setTimeout(function(){ btn.classList.remove('button-primary'); }, 600); } catch(err){}
                btn.click();
            }
        }, true);

        // Also add a small tooltip hint once per page load
        try {
            var actions = document.querySelector('#major-publishing-actions');
            if(actions && !document.getElementById('wcess-hint')){
                var hint = document.createElement('div');
                hint.id = 'wcess-hint';
                hint.style.fontSize = '11px';
                hint.style.opacity = '0.75';
                hint.style.marginTop = '6px';
                hint.textContent = (navigator.platform.toUpperCase().indexOf('MAC')>=0 ? 'Tipp: ⌘S' : 'Tipp: Ctrl+S') + ' speichert den Beitrag.';
                actions.appendChild(hint);
            }
        } catch(err){}
    })();
    </script>
    <?php
}
