<?php
/**
 * @version		$Id: item.php 1812 2013-01-14 18:45:06Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
defined('_JEXEC') or die;
?>

<!-- Start K2 Item Layout -->
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>
<div class="blog lista column twelve columns">

    <article>
        <!-- Plugins: BeforeDisplay -->
<?php echo $this->item->event->BeforeDisplay; ?>

        <!-- K2 Plugins: K2BeforeDisplay -->
<?php echo $this->item->event->K2BeforeDisplay; ?>

        <?php if ($this->item->params->get('itemTitle')): ?>
            <!-- Item title -->
            <div class="title"><a href="#">

                <?php echo $this->item->title; ?>
                </a>


            </div>
<?php endif; ?>

        <!-- Plugins: AfterDisplayTitle -->
<?php echo $this->item->event->AfterDisplayTitle; ?>

        <!-- K2 Plugins: K2AfterDisplayTitle -->
<?php echo $this->item->event->K2AfterDisplayTitle; ?>

        <?php

        if (
                $this->item->params->get('itemFontResizer') ||
                $this->item->params->get('itemPrintButton') ||
                $this->item->params->get('itemEmailButton') ||
                $this->item->params->get('itemSocialButton') ||
                $this->item->params->get('itemVideoAnchor') ||
                $this->item->params->get('itemImageGalleryAnchor') ||
                $this->item->params->get('itemCommentsAnchor')
        ):
            ?>

        <?php endif; ?>



        <div class="itemBody">

            <!-- Plugins: BeforeDisplayContent -->
            <?php echo $this->item->event->BeforeDisplayContent; ?>

            <!-- K2 Plugins: K2BeforeDisplayContent -->
            <?php echo $this->item->event->K2BeforeDisplayContent; ?>

            <?php if ($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
                <!-- Item Image -->
                <div class="itemImageBlock">
                    <span class="itemImage">
                        <a class="modal" rel="{handler: 'image'}" href="<?php echo $this->item->imageXLarge; ?>" title="<?php echo JText::_('K2_CLICK_TO_PREVIEW_IMAGE'); ?>">
                            <img src="<?php echo $this->item->image; ?>" alt="<?php if (!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
                        </a>
                    </span>

                    <?php if ($this->item->params->get('itemImageMainCaption') && !empty($this->item->image_caption)): ?>
                        <!-- Image caption -->
                        <span class="itemImageCaption"><?php echo $this->item->image_caption; ?></span>
                    <?php endif; ?>

                    <?php if ($this->item->params->get('itemImageMainCredits') && !empty($this->item->image_credits)): ?>
                        <!-- Image credits -->
                        <span class="itemImageCredits"><?php echo $this->item->image_credits; ?></span>
                    <?php endif; ?>

                    <div class="clr"></div>
                </div>
            <?php endif; ?>

            <?php if (!empty($this->item->fulltext)): ?>
                <?php if ($this->item->params->get('itemIntroText')): ?>
                    <!-- Item introtext -->
                    <div class="itemIntroText">
                        <?php echo $this->item->introtext; ?>
                    </div>
                <?php endif; ?>
                <?php if ($this->item->params->get('itemFullText')): ?>
                    <!-- Item fulltext -->
                    <div class="itemFullText">
                        <?php echo $this->item->fulltext; ?>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <!-- Item text -->
                <div class="itemFullText">
                    <?php echo $this->item->introtext; ?>
                </div>
            <?php endif; ?>



            <?php if ($this->item->params->get('itemHits') || ($this->item->params->get('itemDateModified') && intval($this->item->modified) != 0)): ?>


                <div class="bottomline sup"></div>
                <div class="icons">
                    <!--<span class="nombre"> 
                        <?php if ($this->item->params->get('itemAuthor')): ?>
							Por
                             Item Author 
                            <span class="azul">

                                <?php if (empty($this->item->created_by_alias)): ?>
                                    <a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
                                <?php else: ?>
                                    <?php echo $this->item->author->name; ?>
                                <?php endif; ?>
                            </span>
                        <?php endif; ?>

                    </span>-->
                    <?php if ($this->item->params->get('itemDateCreated')): ?>
                        <!-- Date created -->
                        <span class="fecha">
                            <?php echo JHTML::_('date', $this->item->created, JText::_('K2_DATE_FORMAT_LC2')); ?>
                        </span>
                    <?php endif; ?>




                    <span class="comentaris">
                        <?php if (!empty($this->item->event->K2CommentsCounter)): ?>
                            <!-- K2 Plugins: K2CommentsCounter -->
                            <?php echo $this->item->event->K2CommentsCounter; ?>
                        <?php else: ?>
                            <?php if ($this->item->numOfComments > 0): ?>
                                <a class="itemCommentsLink k2Anchor" href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
                                    <span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments > 1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
                                </a>
                            <?php else: ?>
                                <a class="itemCommentsLink k2Anchor" href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
                                    <?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </span>




                </div>
                <div class="bottomline"></div>


            <?php endif; ?>


            <?php if ($this->item->params->get('itemRating')): ?>
                <!-- Item Rating -->
                <div class="itemRatingBlock">
                    <span><?php echo JText::_('K2_RATE_THIS_ITEM'); ?></span>
                    <div class="itemRatingForm">
                        <ul class="itemRatingList">
                            <li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
                            <li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
                            <li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
                            <li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
                            <li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
                            <li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
                        </ul>
                        <div id="itemRatingLog<?php echo $this->item->id; ?>" class="itemRatingLog"><?php echo $this->item->numOfvotes; ?></div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            <?php endif; ?>

            <!-- Plugins: AfterDisplayContent -->
            <?php echo $this->item->event->AfterDisplayContent; ?>

            <!-- K2 Plugins: K2AfterDisplayContent -->
            <?php echo $this->item->event->K2AfterDisplayContent; ?>

            <div class="clr"></div>
        </div>

        <!-- Plugins: AfterDisplay -->
        <?php echo $this->item->event->AfterDisplay; ?>

        <!-- K2 Plugins: K2AfterDisplay -->
        <?php echo $this->item->event->K2AfterDisplay; ?>

        <?php if ($this->item->params->get('itemComments') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1'))): ?>
            <!-- K2 Plugins: K2CommentsBlock -->
            <?php echo $this->item->event->K2CommentsBlock; ?>
        <?php endif; ?>

        <?php if ($this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)): ?>
            <!-- Item comments -->
            <a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>


            <?php if ($this->item->params->get('commentsFormPosition') == 'above' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
                <!-- Item comments form -->
                <div class="itemCommentsForm">
                    <?php echo $this->loadTemplate('comments_form'); ?>
                </div>
            <?php endif; ?>
            <div class="mod_coment">
                <?php if ($this->item->numOfComments > 0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
                    <!-- Item user comments -->
                    <h3 class="itemCommentsCounter">
                        <span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments > 1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
                    </h3>

                    <ul class="coment clearfix">
                        <?php foreach ($this->item->comments as $key => $comment): ?>
                            <li>

                                <?php if ($comment->userImage): ?>
                                    <img src="<?php echo $comment->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comment->userName); ?>" width="<?php echo $this->item->params->get('commenterImgWidth'); ?>" />
                                <?php endif; ?>
                                <p class="datos">

                                    <?php if (!empty($comment->userLink)): ?>
                                        <a href="<?php echo JFilterOutput::cleanText($comment->userLink); ?>" title="<?php echo JFilterOutput::cleanText($comment->userName); ?>" target="_blank" rel="nofollow">
                                            <?php echo $comment->userName; ?>
                                        </a>
                                    <?php else: ?>
                                        <?php echo $comment->userName; ?>
                                    <?php endif; ?>

                                    <span class="fecha">
                                        <?php echo JHTML::_('date', $comment->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?>
                                    </span>

                                </p>

                                <p><?php echo $comment->commentText; ?></p>

                                <?php if ($this->inlineCommentsModeration || ($comment->published && ($this->params->get('commentsReporting') == '1' || ($this->params->get('commentsReporting') == '2' && !$this->user->guest)))): ?>
                                    <span class="commentToolbar">
                                        <?php if ($this->inlineCommentsModeration): ?>
                                            <?php if (!$comment->published): ?>
                                                <a class="commentApproveLink" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=publish&commentID=' . $comment->id . '&format=raw') ?>"><?php echo JText::_('K2_APPROVE') ?></a>
                                            <?php endif; ?>

                                            <a class="commentRemoveLink" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=remove&commentID=' . $comment->id . '&format=raw') ?>"><?php echo JText::_('K2_REMOVE') ?></a>
                                        <?php endif; ?>

                                        <?php if ($comment->published && ($this->params->get('commentsReporting') == '1' || ($this->params->get('commentsReporting') == '2' && !$this->user->guest))): ?>
                                            <a class="modal" rel="{handler:'iframe',size:{x:560,y:480}}" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=report&commentID=' . $comment->id) ?>"><?php echo JText::_('K2_REPORT') ?></a>
                                        <?php endif; ?>

                                        <?php if ($comment->reportUserLink): ?>
                                            <a class="k2ReportUserButton" href="<?php echo $comment->reportUserLink; ?>"><?php echo JText::_('K2_FLAG_AS_SPAMMER'); ?></a>
                                        <?php endif; ?>

                                    </span>
                                <?php endif; ?>

                                <div class="sp_puntos"></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="itemCommentsPagination">
                    <?php echo $this->pagination->getPagesLinks(); ?>
                    <div class="clr"></div>
                </div>
            <?php endif; ?>

            <?php if ($this->item->params->get('commentsFormPosition') == 'below' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
                <!-- Item comments form -->
                <div class="itemCommentsForm">
                    <?php echo $this->loadTemplate('comments_form'); ?>
                </div>
            <?php endif; ?>

            <?php $user = JFactory::getUser();
            if ($this->item->params->get('comments') == '2' && $user->guest): ?>
                <div><?php echo JText::_('K2_LOGIN_TO_POST_COMMENTS'); ?></div>
            <?php endif; ?>

<?php endif; ?>



        <div class="clr"></div>
    </article>
</div>
<!-- End K2 Item Layout -->
