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

<div class="page" data-title="<?php p($l->t('A safe home for all your data')); ?>" data-subtitle="">
	<div class="content content-values">
		<div class="description-block text-center">
			<h2><?php p($l->t('Welcome to your dotplex Cloud account!')); ?></h2>
			<p>
				<?php p($l->t('Here you have your emails, calendars, contacts and file storage all together in one place.')); ?>
			</p>
		</div>

		<ul id="wizard-values">
			<li>
				<svg width="150" height="150" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 89.3 94" xml:space="preserve"><style>.st1{fill:none;stroke:#00cc94;stroke-width:8;stroke-linecap:round;stroke-linejoin:round}</style><path class="st1" d="M4 20.9" opacity=".3"/><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="89.3" y1="83.6" x2="40.6" y2="83.6" gradientTransform="matrix(1 0 0 -1 0 96.1)"><stop offset="0" stop-color="#00cc94"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".9"/><stop offset=".4" stop-color="#00cc94" stop-opacity=".5"/><stop offset=".7" stop-color="#00cc94" stop-opacity=".2"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".1"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/></linearGradient><path d="M85.3 24.9h-3.4A61.4 61.4 0 0141.8 7c-1.6-1.6-1.6-4.1 0-5.7s4.1-1.6 5.7 0a53.8 53.8 0 0034.8 15.6h3.1c2.2 0 4 1.8 4 4s-1.9 4-4.1 4z" fill="url(#SVGID_1_)"/><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="0" y1="40.7" x2="48.7" y2="40.7" gradientTransform="matrix(1 0 0 -1 0 96.1)"><stop offset="0" stop-color="#00cc94"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".9"/><stop offset=".4" stop-color="#00cc94" stop-opacity=".5"/><stop offset=".7" stop-color="#00cc94" stop-opacity=".2"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".1"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/></linearGradient><path d="M44.7 94c-11.3 0-26.9-6.9-37-40A192 192 0 010 21.2 4 4 0 013.8 17 3.9 3.9 0 018 20.7c0 .1 1 10.3 7.3 30.9C20.1 67.3 29.1 86 44.7 86c2.2 0 4 1.8 4 4s-1.8 4-4 4z" fill="url(#SVGID_2_)"/><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="40.7" y1="40.7" x2="89.3" y2="40.7" gradientTransform="matrix(1 0 0 -1 0 96.1)"><stop offset="0" stop-color="#00cc94"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".9"/><stop offset=".4" stop-color="#00cc94" stop-opacity=".5"/><stop offset=".7" stop-color="#00cc94" stop-opacity=".2"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".1"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/></linearGradient><path d="M44.7 94c-2.2 0-4-1.8-4-4s1.8-4 4-4c7.4 0 18.2-6.3 27.9-36.4 6.2-19.2 8.8-29.5 8.8-29.6.5-2.1 2.7-3.5 4.8-2.9s3.5 2.7 2.9 4.8a525 525 0 01-9 30.2C71.2 79.9 59.2 94 44.7 94z" fill="url(#SVGID_3_)"/><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="48.6" y1="83.6" x2="0" y2="83.6" gradientTransform="matrix(1 0 0 -1 0 96.1)"><stop offset="0" stop-color="#00cc94"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".9"/><stop offset=".4" stop-color="#00cc94" stop-opacity=".5"/><stop offset=".7" stop-color="#00cc94" stop-opacity=".2"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".1"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/></linearGradient><path d="M7.1 24.9H4c-2.2 0-4-1.8-4-4s1.8-4 4-4h3c5.4-.3 10.8-1.4 15.9-3.4A51.3 51.3 0 0041.8 1.3c1.6-1.6 4.1-1.6 5.7 0s1.6 4.1 0 5.7A62.1 62.1 0 017.4 24.9h-.3z" fill="url(#SVGID_4_)"/><path class="st1" d="M44.7 90"/></svg>
				<p class="text-center"><?php p($l->t('Hosted on our secure servers in Berlin')); ?></p>
			</li>
			<li>
				<svg width="150" height="150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.4 67.3"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-4.6" y1="694.7" x2="99.2" y2="694.7" gradientTransform="translate(0 -648)"><stop offset="0" stop-color="#00cc94" stop-opacity="0"/><stop offset="0" stop-color="#00cc94" stop-opacity="0"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".2"/><stop offset=".2" stop-color="#00cc94" stop-opacity=".4"/><stop offset=".3" stop-color="#00cc94" stop-opacity=".5"/><stop offset=".3" stop-color="#00cc94" stop-opacity=".6"/><stop offset=".5" stop-color="#00cc94" stop-opacity=".7"/><stop offset=".6" stop-color="#00cc94" stop-opacity=".7"/><stop offset=".8" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".8" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".9"/><stop offset="1" stop-color="#00cc94"/></linearGradient><path d="M82.7 67.3H20.1a20.6 20.6 0 010-41.1c2.2 0 4 1.8 4 4s-1.8 4-4 4a12.6 12.6 0 000 25.2h62.6a12.6 12.6 0 00.8-25.2 4 4 0 01-3.7-4.3 4 4 0 014.3-3.7c11.3.7 20 10.5 19.2 21.8a20.7 20.7 0 01-20.6 19.3z" fill="url(#a)"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="16.1" y1="670.9" x2="48.7" y2="670.9" gradientTransform="translate(0 -648)"><stop offset="0" stop-color="#00cc94"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".9"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".2" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".3" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".3" stop-color="#00cc94" stop-opacity=".7"/><stop offset=".5" stop-color="#00cc94" stop-opacity=".6"/><stop offset=".7" stop-color="#00cc94" stop-opacity=".4"/><stop offset=".9" stop-color="#00cc94" stop-opacity=".1"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/></linearGradient><path d="M20.1 34.1h-.2a4 4 0 01-3.8-4.2 19.2 19.2 0 0131.1-13.8c1.7 1.4 1.9 4 .4 5.6a4 4 0 01-5.4.6A11.3 11.3 0 0024 30.4c0 2-1.8 3.7-3.9 3.7z" fill="url(#b)"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="45" y1="661.1" x2="92.8" y2="661.1" gradientTransform="matrix(1 .00679 -.00679 1 2.3 -644.6)"><stop offset="0" stop-color="#00cc94"/><stop offset=".1" stop-color="#00cc94" stop-opacity=".9"/><stop offset=".2" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".3" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".4" stop-color="#00cc94" stop-opacity=".8"/><stop offset=".5" stop-color="#00cc94" stop-opacity=".7"/><stop offset=".6" stop-color="#00cc94" stop-opacity=".6"/><stop offset=".8" stop-color="#00cc94" stop-opacity=".3"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/><stop offset="1" stop-color="#00cc94" stop-opacity="0"/></linearGradient><path d="M83.6 34l-1.1-.2a4 4 0 01-2.7-5 16.2 16.2 0 00-31.1-9.3l-.1.3a3.9 3.9 0 01-4.7 3.1 3.9 3.9 0 01-3.1-4.7l.2-.6A24.2 24.2 0 0187.6 31c-.7 1.9-2.3 3-4 3z" fill="url(#c)" /></svg>
				<p class="text-center"><?php p($l->t('Open standards for easy and secure sharing of your data')); ?></p>
			</li>
			<li>
				<svg width="150" height="150" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150"><path d="M108 139.8a6 6 0 100-12 6 6 0 000 12z" fill="#00CC94"/><path d="M108 140a6.1 6.1 0 01-5.5-3.6L80.4 89.1a6.1 6.1 0 011.2-6.9 9.6 9.6 0 10-13.7 0 6 6 0 011.3 6.9L50 130.7s-3.1-1.4-5.6-2.8c-1.8-1-3.4-2-5-3.3l17.1-37.3a21.9 21.9 0 1136.5 0l20.6 44a6.1 6.1 0 01-5.6 8.7z" fill="url(#paint0_linear)"/><path d="M42.2 139.4a6 6 0 100-12 6 6 0 000 12z" fill="#00CC94"/><path d="M74.3 148A73 73 0 1175.8 2a73 73 0 01-1.5 146zm1.3-134a61 61 0 10-1.2 122 61 61 0 001.2-122z" fill="url(#paint1_linear)"/><path d="M45.3 128.3A61 61 0 0171.9 14L74 2a73 73 0 00-35.2 136.4l6.5-10z" fill="url(#paint2_linear)"/><defs><linearGradient id="paint0_linear" x1="97.5" y1="96.7" x2="32" y2="96.7" gradientUnits="userSpaceOnUse"><stop offset=".1" stop-color="#00CC94" stop-opacity=".8"/><stop offset=".2" stop-color="#00CC94" stop-opacity=".7"/><stop offset=".4" stop-color="#00CC94" stop-opacity=".4"/><stop offset=".6" stop-color="#00CC94" stop-opacity=".2"/><stop offset=".8" stop-color="#00CC94" stop-opacity=".1"/><stop offset=".9" stop-color="#00CC94" stop-opacity="0"/></linearGradient><linearGradient id="paint1_linear" x1="64.1" y1="147.5" x2="97.8" y2="-76" gradientUnits="userSpaceOnUse"><stop stop-color="#00CC94" stop-opacity="0"/><stop offset=".5" stop-color="#00CC94" stop-opacity=".5"/><stop offset=".8" stop-color="#00CC94" stop-opacity=".9"/><stop offset="1" stop-color="#00CC94"/></linearGradient><linearGradient id="paint2_linear" x1="38.7" y1="-2.3" x2="36.5" y2="138.4" gradientUnits="userSpaceOnUse"><stop offset=".1" stop-color="#00CC94" stop-opacity="0"/><stop offset=".6" stop-color="#00CC94" stop-opacity=".5"/><stop offset=".9" stop-color="#00CC94" stop-opacity=".9"/><stop offset="1" stop-color="#00CC94"/></linearGradient></defs></svg>
				<p class="text-center"><?php p($l->t('Based on Nextcloud - a 100%% free and open source software with an active community')); ?></p>
			</li>
		</ul>
	</div>
</div>
