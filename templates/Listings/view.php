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
            <?= $this->Html->link(__('Edit Listing'), ['action' => 'edit', $listing->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Listing'), ['action' => 'delete', $listing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listing->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('View Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Listing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="listings view content">
            <h3><?= h($listing->slug) ?></h3>
            <table>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($listing->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($listing->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($listing->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($listing->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip Code') ?></th>
                    <td><?= h($listing->zip_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mls Number') ?></th>
                    <td><?= $this->Number->format($listing->mls_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Beds') ?></th>
                    <td><?= $this->Number->format($listing->beds) ?></td>
                </tr>
                <tr>
                    <th><?= __('Baths') ?></th>
                    <td><?= $this->Number->format($listing->baths) ?></td>
                </tr>
                <tr>
                    <th><?= __('Living Sqft') ?></th>
                    <td><?= $this->Number->format($listing->living_sqft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($listing->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($listing->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($listing->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Listed') ?></th>
                    <td><?= $listing->listed ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Regards') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listing->regards)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>