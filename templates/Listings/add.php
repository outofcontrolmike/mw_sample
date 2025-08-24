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
            <?= $this->Html->link(__('Manage Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="listings form content">
            <?= $this->Form->create($listing, ['type' => 'file']) ?>
            <fieldset>
                <h1><?= __('Add Listing') ?></h1>
                <?php
                echo $this->Form->control('mls_number', [
                    'label' => 'MLS Number',
                ]);
                echo $this->Form->control('beds', ['maxlength' => 3]);
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
                echo $this->Form->control('image_file', ['type' => 'file', 'label' => 'Upload Image, must be lesser than equal to 2MB']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>