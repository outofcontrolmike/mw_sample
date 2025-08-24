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
            <?= $this->Html->link(__('View Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="listings form content">
            <?= $this->Form->create($listing) ?>
            <fieldset>
                <h1><?= __('Add Property') ?></h1>
                <?php
                echo $this->Form->control('slug');
                echo $this->Form->control('mls_number');
                echo $this->Form->control('beds');
                echo $this->Form->control('baths');
                echo $this->Form->control('living_sqft');
                echo $this->Form->control('price');
                echo $this->Form->control('address');
                echo $this->Form->control('city');
                echo $this->Form->control('state', [
                    'type' => 'select',
                    'options' => $states,
                    'empty' => 'Select a state'
                ]);
                echo $this->Form->control('zip_code');
                echo $this->Form->control('regards');
                echo $this->Form->control('image', ['type' => 'file']);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>