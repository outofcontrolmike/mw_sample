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
            <?= $this->Html->link(__('Manage Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="listings form content">
            <?= $this->Form->create($listing, ['type' => 'file']) ?>
            <fieldset>
                <h3><?= __('Edit Listing') ?></h3>
                <?php if ($listing->image): ?>
                    <img src="<?= $this->Url->image($listing->image) ?>" alt="Listing Image" style="max-height:300px;" />
                <?php else: ?>
                    No Image
                <?php endif; ?>
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
                echo $this->Form->control('image_file', ['type' => 'file', 'label' => 'Replace Image, must be lesser than equal to 2MB']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Update Listing')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>