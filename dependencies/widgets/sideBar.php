<?php
/**
 * Ozi Sidebar Widget
 * ==================
 * sidebars (Bootstrap offcanvas)
 *
 * Installation:
 * 1. Save as: system_files/widgets/sidebar.php
 * 2. Require it inside your system_config.php under the WIDGETS section.
 * 3. Use `sidebar_trigger("NameOfSidebar")` in any clickable element.
 * 4. Use `sidebar("NameOfSidebar", "comp_files/sample.php", "Sidebar Title", "slideInLeft")` 
 *    at the bottom of your component page.
 */

/**
 * Add sidebar trigger to any element (just like modal_trigger)
 */
function sidebar_trigger($trigger = "exampleSidebar") {
    ?>
    data-bs-toggle="offcanvas" data-bs-target="#<?php echo $trigger; ?>" aria-controls="<?php echo $trigger; ?>"
    <?php
}

/**
 * Display the actual sidebar (offcanvas)
 */
function sidebar($target = "exampleSidebar", $body_contents = "sample.php", $title = "My Sidebar", $animate = "slideInLeft") {
    ?>
    <!-- Sidebar (Offcanvas) -->
    <div class="offcanvas offcanvas-start animate__animated <?php echo $animate; ?>" tabindex="-1" id="<?php echo $target; ?>" aria-labelledby="<?php echo $target; ?>Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="<?php echo $target; ?>Label"><?php echo $title; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php require("components/" . $body_contents); ?>
        </div>
    </div>
    <?php
}
?>
