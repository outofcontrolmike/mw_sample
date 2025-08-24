<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Listing> $listings
 */
?>
<div class="listings index content">
    <?= $this->Html->link(__('Add Property'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Manage Listings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mls_number') ?></th>
                    <th><?= $this->Paginator->sort('beds') ?></th>
                    <th><?= $this->Paginator->sort('baths') ?></th>
                    <th><?= $this->Paginator->sort('living_sqft') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('zip_code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listings as $listing): ?>
                    <tr>
                        <td>
                            <?= $this->Html->link($listing->id, ['action' => 'view', $listing->slug]) ?>
                        </td>
                        <td><?= h($listing->mls_number) ?></td>
                        <td><?= $this->Number->format($listing->beds) ?></td>
                        <td><?= $this->Number->format($listing->baths) ?></td>
                        <td><?= $this->Number->format($listing->living_sqft) ?></td>
                        <td><?= $this->Number->format($listing->price) ?></td>
                        <td><?= h($listing->address) ?></td>
                        <td><?= h($listing->city) ?></td>
                        <td><?= h($listing->state) ?></td>
                        <td><?= h($listing->zip_code) ?></td>
                        <td><?= h($listing->created) ?></td>
                        <td><?= h($listing->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $listing->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listing->id]) ?>
                            <?= $this->Form->postLink(
                                __('Delete'),
                                ['action' => 'delete', $listing->id],
                                [
                                    'method' => 'delete',
                                    'confirm' => __('Are you sure you want to delete # {0}?', $listing->id),
                                ]
                            ) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>