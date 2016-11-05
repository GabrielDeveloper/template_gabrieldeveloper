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
    <?php foreach ($items as $key=>$item):	?>
    <a  href="<?php echo $item->link; ?>"><div class="bloc2">

     <?php if($params->get('itemDateCreated')): 
         
     $dia = JHTML::_('date', $item->created, JText::_('d'));
     $mes = JHTML::_('date', $item->created, JText::_('m'));
     
     switch ($mes) {
         
         case "01":
             $mes = 'Jan';
             break;
         case "02":
             $mes = 'Fev';
             break;
         case "03":
             $mes = 'Mar';
             break;
         case "04":
             $mes = 'Abr';
             break;
         case "05":
             $mes = 'Mai';
             break;
         case "06":
             $mes = 'Jun';
             break;
         case "07":
             $mes = 'Jul';
             break;
         case "08":
             $mes = 'Ago';
             break;
         case "09":
             $mes = 'Set';
             break;
         case "10":
             $mes = 'Out';
             break;
         case "11":
             $mes = 'Nov';
             break;
         case "12":
             $mes = 'Dez';
             break;
     }
         
         
         
         ?>
            <!--<div class="date">22<br><span class="month">JUN</span></div>-->
            <div class="date">
                <?php echo $dia; ?><br>
                <span class="month"><?php echo $mes; ?></span>
            </div>
      <?php endif; ?>
      
      

      <?php if($params->get('itemTitle') || $params->get('itemIntroText')): ?>
      <div class="info">
          <h3><?php echo $item->title; ?></h3>
      	<?php if($params->get('itemIntroText')): ?>
      	<span class="white"><?php echo $item->introtext; ?></span>
      	<?php endif; ?>
      </div>
      <?php endif; ?>

      

    </div></a>
<div class="separa3"></div>
    <?php endforeach; ?>

