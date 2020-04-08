
<?php 
if(empty($_SESSION['user'])){
    header("Location:login.php");
} 

    include_once("header.php");
?>

<!--Returns-exchange-->
<div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="other-page margin-top-75">
                        <!--Title-->
                        <h3 class="page-title">returns + exchanges</h3>
                        <!-- End Title-->
                        <!--Site text-->
                        <h6 class="margin-bottom-30">FREE Returns & Exchanges</h6>
                        <p class="margin-bottom-55">
                            Professionally strategize resource maximizing portals rather
                            than parallel niches. Energistically provide access to flexible
                            content and cross-platform experiences. Rapidiously target
                            alternative schemas before worldwide partnerships. Proactively
                            predominate B2C relationships before intermandated alignments. Proactively
                            envisioneer focused markets with ubiquitous methodologies.
                        </p>
                        <h6 class="margin-bottom-30">How to Make a Return or Exchange</h6>
                        <p>
                            Globally administrate fully researched applications for timely scenarios.
                            Assertively simplify multimedia based paradigms without efficient experiences.
                            Rapidiously formulate collaborative benefits with leveraged e-business.
                            Seamlessly empower mission-critical core competencies without premier systems.
                            Competently impact installed base convergence through team building value.
                        </p>
                        <p class="margin-top-30">
                            Globally administrate fully researched applications for timely scenarios.
                            Assertively simplify multimedia based paradigms without efficient experiences.
                            Rapidiously formulate collaborative benefits with leveraged e-business. Seamlessly
                            empower mission-critical core competencies without premier systems. Competently
                            impact installed base convergence through team building value.
                        </p>
                        <!--End Site text-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include_once("footer.php");
?>