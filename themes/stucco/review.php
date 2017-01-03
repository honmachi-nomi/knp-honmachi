<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header.php');
?>

<!--  Main Contents -->
<div id="main-content" class="main-container">
    <div class="main-content-inner clearfix">

        <ul class="breadcrumb_area">
            <?php
            $a = new Area('breadcrumb');
            $a->display($c);
            ?>
        </ul>
        <?php
        $a = new Area('Page Header');
        $a->enableGridContainer();
        $a->display($c);
        ?>

        <div class="container review-page">
            <div class="row">
                <div id="primary" class="content-primary col-md-8">
                    <main role="main">

                        <article>
                            <?php
                            $a = new Area('title');
                            $a->display($c);
                            ?>
                            <div class="mv">
                                <?php
                                $thm = $c->getAttribute('thumbnail');
                                if($thm) {
                                    echo '<img src="' . $thm->getVersion()->getRelativePath() . '" alt="" />';
                                }
                                ?>
                            <div class="user_name">
                                <?php
                                $c = Page::getCurrentPage();
                                $vo = $c->getVersionObject();
                                if (is_object($vo)) {
                                    $uID = $vo->getVersionAuthorUserID();
                                    $ui = UserInfo::getByID($uID);
                                    $displayName = $ui->getAttribute('displayName');
                                    echo '投稿者：' .  $displayName;
                                }
                                ?>
                            </div>

                            </div>
                            <?php
                            $a = new Area('day');
                            $a->display($c);
                            ?>

                            <?php
                            $a = new Area('Main');
                            $a->setAreaGridMaximumColumns(12);
                            $a->display($c);
                            ?>
                            <div class="category_area">
                                <?php
                                $a = new Area('Category');
                                $a->display($c);
                                ?>

                            </div>

                            <div class="post-yser">
                                <?php

                                ?>

                            </div>

                        </article>
                        <div class="pager_area">
                            <?php
                            $a = new Area('pager');
                            $a->display($c);
                            ?>

                        </div>
                    </main>
                </div>
                <div id="secondary" class="content-secondary col-md-4" role="complementary">
                    <aside class="">
                        <?php
                        $a = new Area('Sidebar');
                        $a->display($c);
                        $a = new Area('Sidebar Footer');
                        $a->display($c);
                        ?>
                    </aside>
                </div>
            </div>
        </div>
        <?php
        $a = new Area('Page Footer');
        $a->enableGridContainer();
        $a->display($c);
        ?>

    </div>
</div><!-- // Main Contents -->

<?php $this->inc('inc/footer.php'); ?>
