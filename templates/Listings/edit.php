<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Listing $listing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $listing->id],
                ['confirm' => __('Are you sure you want to delete property # {0}?', $listing->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('View Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="listings form content">
            <?= $this->Form->create($listing) ?>
            <fieldset>
                <legend><?= __('Edit Listing') ?></legend>
                <?php
                    echo $this->Form->control('mls_number');
                    echo $this->Form->control('beds');
                    echo $this->Form->control('baths');
                    echo $this->Form->control('living_sqft');
                    echo $this->Form->control('price');
                    echo $this->Form->control('address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('zip_code');
                    echo $this->Form->control('regards');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
