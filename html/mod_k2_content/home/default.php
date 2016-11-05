<?php
/**
 * @version		$Id: default.php 1812 2013-01-14 18:45:06Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
defined('_JEXEC') or die;
?>
<div class="titulo01">
    <h2 class="projetoh1"><span class="remarcar"><?php echo $module->title; ?></span></h2>
</div>

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php if ($params->get('moduleclass_sfx')) echo ' ' . $params->get('moduleclass_sfx'); ?>">


        <?php if (count($items)): ?>
                <?php foreach ($items as $key => $item): ?>
        <article class="column one-third article activo">

                        <!-- Plugins: BeforeDisplay -->
                        <?php echo $item->event->BeforeDisplay; ?>

                        <!-- K2 Plugins: K2BeforeDisplay -->
                        <?php echo $item->event->K2BeforeDisplay; ?>

                        <?php if ($params->get('itemTitle')): ?>
                            <a class="moduleItemTitle" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>
                        <?php endif; ?>

                        <?php if($params->get('itemDateCreated')): ?>
                        <span class="moduleItemDateCreated"><?php echo JHTML::_('date', $item->created, 'd/m/Y'); ?>  /  </span>
                        <?php endif; ?>
                        <?php if($params->get('itemCategory')): ?> <a class="moduleItemCategory" href="<?php echo $item->categoryLink; ?>"><?php echo $item->categoryname; ?></a>
                        <?php endif; ?>
                        <!-- Plugins: AfterDisplayTitle -->
                        <?php echo $item->event->AfterDisplayTitle; ?>

                        <!-- K2 Plugins: K2AfterDisplayTitle -->
                        <?php echo $item->event->K2AfterDisplayTitle; ?>

                        <!-- Plugins: BeforeDisplayContent -->
                        <?php echo $item->event->BeforeDisplayContent; ?>

                        <!-- K2 Plugins: K2BeforeDisplayContent -->
                        <?php echo $item->event->K2BeforeDisplayContent; ?>


                        <!-- ************** IMAGEM DO ITEM **************** -->
                        <?php if ($params->get('itemImage') || $params->get('itemIntroText')): ?>
                            <div class="moduleItemIntrotext">
                                <?php if ($params->get('itemImage') && isset($item->image)): ?>
									<div class="imagen">
										<div class="hover">
											<a class="" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;">
											</a>
										</div>
										<img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" height="162" width="274"/>
									</div>
                                <?php endif; ?>

                                <?php if ($params->get('itemIntroText')): ?>
								<a class="moduleItemTitle" href="<?php echo $item->link; ?>">
                                    <?php 
                                    $texto = $item->introtext;
                                    $tam = strlen($texto);
                                    if($tam > 150){
                                        $texto = trim(substr($texto, 0, 150))."...</p>";
                                    }
                                    #echo $item->introtext; 
                                    echo $texto; 
                                    
                                    
                                    
                                    
                                    ?>
								</a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>


                        <!-- Plugins: AfterDisplayContent -->
                        <?php echo $item->event->AfterDisplayContent; ?>

                        <!-- K2 Plugins: K2AfterDisplayContent -->
                        <?php echo $item->event->K2AfterDisplayContent; ?>

                        <!-- Plugins: AfterDisplay -->
                        <?php echo $item->event->AfterDisplay; ?>

                        <!-- K2 Plugins: K2AfterDisplay -->
                        <?php echo $item->event->K2AfterDisplay; ?>

                        </article>
                <?php endforeach; ?>
        <?php endif; ?>

        

</div>
