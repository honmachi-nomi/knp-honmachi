<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header_home.php');

use Concrete\Core\Validation\CSRF\Token;
?>

		<!--  Main Contents -->
		<div id="main-content" class="main-container">
			<div class="home-content-inner clearfix">
				<div class="home-upper">
					<?php 
					$a = new Area('Page Header');
					$a->enableGridContainer();
					$a->display($c);
					?>
				</div>

				<main class="home-middle" role="main">
					<article>
						<?php 
						$a = new Area('Main');
						$a->enableGridContainer();
						$a->display($c);
						?>
					</article>
				</main>

				<div class="home-lower">
					<?php 
					$a = new Area('Page Footer');
					$a->enableGridContainer();
					$a->display($c);
					?>

				</div>
			</div>
		</div><!-- // Main Contents -->

<?php   $this->inc('inc/footer.php'); ?>
