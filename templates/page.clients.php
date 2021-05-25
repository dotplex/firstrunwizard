<?php
/**
 * @copyright Copyright (c) 2021 Johannes Brückner <johannes@dotplex.com>
 *
 * @author Johannes Brückner <johannes@dotplex.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var \OCP\Defaults $theme
 */
?>

<div class="page" data-title="<?php p($l->t('Stay in sync')); ?>" data-subtitle="">
	<div class="content content-clients">
		<h2><?php p($l->t('dotplex Cloud allows access to your data wherever you are.')); ?></h2>
		<div class="description-block app-buttons">
			<p><?php p($l->t('Apps to connect your mobile devices and your PC or Mac are available here:')); ?></p>
			<a target="_blank" href="<?php p($_['desktop']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'desktopapp.svg')); ?>"
					 alt="<?php p($l->t('Desktop client')); ?>"
					 style="height:50px"/>
			</a>
			<a target="_blank" href="<?php p($_['android']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'googleplay.svg')); ?>"
					 alt="<?php p($l->t('Android app')); ?>"
					 style="height:50px"/>
			</a>
			<a target="_blank" href="<?php p($_['ios']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'appstore.svg')); ?>"
					 alt="<?php p($l->t('iOS app')); ?>" style="height:50px"/>
			</a>
		</div>
		<div class="description-block">
			<p><?php p($l->t('Connect other desktop apps to dotplex Cloud:')); ?></p>
			<a target="_blank" class="button"
			   href="<?php p(link_to_docs('user-sync-calendars')) ?>" rel="noreferrer noopener">
				<span class="icon icon-calendar-dark"></span>
				<?php p($l->t('Connect your calendar')); ?>
			</a>
			<a target="_blank" class="button"
			   href="<?php p(link_to_docs('user-sync-contacts')) ?>" rel="noreferrer noopener">
				<span class="icon icon-contacts-dark"></span>
				<?php p($l->t('Connect your contacts')); ?>
			</a>
			<a target="_blank" class="button"
			   href="<?php p(link_to_docs('user-webdav')); ?>" rel="noreferrer noopener">
				<span class="icon icon-files-dark"></span>
				<?php p($l->t('Access files via WebDAV')); ?>
			</a>
			<?php if($_['useTLS']): ?>
			<a target="_blank" class="button"
			   href="<?php p($_['macOSProfile']); ?>" rel="noreferrer noopener">
				<span class="icon icon-download"></span>
				<?php p($l->t('Download macOS/iOS configuration profile')); ?>
			</a>
			<?php endif; ?>
		</div>
	</div>
</div>
