<?php
/**
 * The template for displaying the footer of Freelancer.
 *
 * @package WordPress
 * @subpackage Bootstrap Options Theme
 */
?>

	<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">

                        <?php // Widget Area Start
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area (Left)') ) :
                        endif; // Widget Area End ?>

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">

                            <?php if ( of_get_option('facebook_url_text') != '' ): ?>
                            <li>
                                <a href="<?php echo of_get_option('facebook_url_text'); ?>" class="btn-social btn-outline" target="_blank">
                                    <i class="fa fa-fw fa-facebook"></i>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( of_get_option('google_plus_url_text') != '' ): ?>
                            <li>
                                <a href="<?php echo of_get_option('google_plus_url_text'); ?>" class="btn-social btn-outline" target="_blank">
                                    <i class="fa fa-fw fa-google-plus"></i>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( of_get_option('twitter_url_text') != '' ): ?>
                            <li>
                                <a href="<?php echo of_get_option('twitter_url_text'); ?>" class="btn-social btn-outline" target="_blank">
                                    <i class="fa fa-fw fa-twitter"></i>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( of_get_option('linkedin_url_text') != '' ): ?>
                            <li>
                                <a href="<?php echo of_get_option('linkedin_url_text'); ?>" class="btn-social btn-outline" target="_blank">
                                    <i class="fa fa-fw fa-linkedin"></i>
                                </a>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="footer-col col-md-4">

                        <?php // Widget Area Start
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area (Right)') ) :
                        endif; // Widget Area End ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo of_get_option('copyright_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
