<template>
	<Modal
		v-if="showModal && slideList.length > 0"
		id="firstrunwizard"
		:has-previous="hasPrevious"
		:has-next="hasNext"
		:size="isMobile ? 'full' : 'normal'"
		name="modal"
		@previous="previous"
		@next="next"
		@close="close">
		<div v-if="currentSlide !== 0 || !withIntro" class="modal-header">
			<div class="firstrunwizard-header">
				<div class="logo">
					<svg width="300"
						height="79"
						viewBox="0 0 300 79"
						fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M32.5411 57.6147C30.6475 60.9914 26.3461 63.5708 20.6655 63.5708C8.60282 63.5708 0 54.0739 0 41.2003C0 28.7722 8.34567 18.9939 20.3148 18.9939C27.6319 18.9939 31.0683 22.0188 32.284 24.2699V0H43.5752C43.5752 0 43.4115 60.8038 43.5752 62.5391H32.5411V57.6147V57.6147ZM22.0447 53.3001C27.9124 53.3001 32.471 48.7978 32.471 41.1299C32.471 33.5324 27.9124 29.2881 22.0447 29.2881C16.2004 29.2881 11.5484 33.6027 11.5484 41.2003C11.5484 48.7978 16.0134 53.3001 22.0447 53.3001Z" fill="white" />
						<path d="M137.879 78.9534V20.0489H148.983V25.2312C150.877 21.9483 155.622 19.0875 161.981 19.0875C174.371 19.0875 181.524 28.5845 181.524 41.2001C181.524 54.0738 173.506 63.5707 161.537 63.5707C155.693 63.5707 151.368 61.2492 149.311 58.3884V78.9534H137.879ZM159.737 29.3583C153.893 29.3583 149.147 33.7667 149.147 41.2705C149.147 48.7742 153.893 53.2765 159.737 53.2765C165.605 53.2765 170.233 48.868 170.233 41.2705C170.257 33.7667 165.605 29.3583 159.737 29.3583Z" fill="white" />
						<path d="M190.571 62.5391V0H202.026V62.5391H190.571Z" fill="white" />
						<path d="M252.24 50.3688C250.09 57.7084 243.38 63.8521 232.954 63.8521C221.336 63.8521 211.073 55.4808 211.073 41.1298C211.073 27.5762 221.055 18.7593 231.902 18.7593C244.993 18.7593 252.825 27.1306 252.825 40.7781C252.825 42.4195 252.661 44.1548 252.661 44.3189H222.341C222.598 49.9233 227.344 54.0035 233.024 54.0035C238.354 54.0035 241.3 51.3302 242.679 47.5315L252.24 50.3688ZM241.557 36.4634C241.393 32.2191 238.635 28.0921 232.089 28.0921C226.151 28.0921 222.879 32.5943 222.621 36.4634H241.557Z" fill="white" />
						<path d="M271.176 41.2003L256.098 20.0256H269.703C271.176 22.3471 276.67 30.2964 278.142 32.6413L286.488 20.0256H299.486L284.665 40.8485L300 62.5391H286.558L277.698 49.5013C276.155 51.8228 270.475 60.2176 269.002 62.5391H256.074L271.176 41.2003Z" fill="white" />
						<path d="M128.739 30.226V20.049H120.206V8.13684H108.844V13.2957V20.0256H103.327H101.177V30.226H108.844V50.0172C108.844 58.2244 114.011 63.1487 122.286 63.1487C125.653 63.1487 127.71 62.539 128.739 62.1169V52.62C128.131 52.7842 126.588 52.9718 125.209 52.9718C121.936 52.9718 120.206 51.7524 120.206 48.0474V30.2495L128.739 30.226Z" fill="white" />
						<path d="M77.8465 41.0126C77.8465 39.6525 76.7477 38.5504 75.3919 38.5504C74.036 38.5504 72.9373 39.6525 72.9373 41.0126C72.9373 42.3726 74.036 43.4748 75.3919 43.4748C76.7477 43.4748 77.8465 42.3726 77.8465 41.0126Z" fill="white" />
						<path d="M77.683 33.931C77.683 32.6647 76.6544 31.6329 75.392 31.6329C74.1297 31.6329 73.1011 32.6647 73.1011 33.931C73.1011 35.1972 74.1297 36.229 75.392 36.229C76.6544 36.229 77.683 35.2207 77.683 33.931Z" fill="white" />
						<path d="M83.7839 37.4718C83.7839 36.2056 82.7787 35.1973 81.5164 35.1973C80.254 35.1973 79.2488 36.2056 79.2488 37.4718C79.2488 38.7381 80.254 39.7464 81.5164 39.7464C82.7553 39.7464 83.7839 38.7381 83.7839 37.4718Z" fill="white" />
						<path d="M83.7606 44.5303C83.7606 43.2875 82.7554 42.2792 81.5164 42.2792C80.2774 42.2792 79.2722 43.2875 79.2722 44.5303C79.2722 45.7731 80.2774 46.7814 81.5164 46.7814C82.7554 46.7814 83.7606 45.7966 83.7606 44.5303Z" fill="white" />
						<path d="M77.6593 48.0707C77.6593 46.8279 76.6541 45.8196 75.4151 45.8196C74.1761 45.8196 73.1709 46.8279 73.1709 48.0707C73.1709 49.3135 74.1761 50.3218 75.4151 50.3218C76.6541 50.3218 77.6593 49.3135 77.6593 48.0707Z" fill="white" />
						<path d="M71.5813 44.5302C71.5813 43.2639 70.5761 42.2556 69.3137 42.2556C68.0514 42.2556 67.0461 43.2639 67.0461 44.5302C67.0461 45.7964 68.0514 46.8048 69.3137 46.8048C70.5527 46.8282 71.5813 45.7964 71.5813 44.5302Z" fill="white" />
						<path d="M71.5812 37.4721C71.5812 36.2058 70.5526 35.1741 69.2902 35.1741C68.0279 35.1741 66.9993 36.2058 66.9993 37.4721C66.9993 38.7384 68.0279 39.7701 69.2902 39.7701C70.576 39.7701 71.5812 38.7384 71.5812 37.4721Z" fill="white" />
						<path d="M77.4252 26.8727C77.4252 25.7471 76.5135 24.8561 75.4147 24.8561C74.2926 24.8561 73.4043 25.7706 73.4043 26.8727C73.4043 27.9983 74.316 28.8893 75.4147 28.8893C76.5135 28.8893 77.4252 27.9983 77.4252 26.8727Z" fill="white" />
						<path d="M84.4621 28.7722C84.4621 27.6701 83.5737 26.7556 82.4516 26.7556C81.3529 26.7556 80.4412 27.6467 80.4412 28.7722C80.4412 29.8744 81.3295 30.7889 82.4516 30.7889C83.5503 30.7889 84.4621 29.8744 84.4621 28.7722Z" fill="white" />
						<path d="M89.6053 33.9311C89.6053 32.8289 88.717 31.9144 87.5949 31.9144C86.4728 31.9144 85.5845 32.8055 85.5845 33.9311C85.5845 35.0332 86.4728 35.9477 87.5949 35.9477C88.717 35.9477 89.6053 35.0566 89.6053 33.9311Z" fill="white" />
						<path d="M91.4756 41.0128C91.4756 39.9107 90.5873 39.0197 89.4885 39.0197C88.3898 39.0197 87.5015 39.9107 87.5015 41.0128C87.5015 42.115 88.3898 43.006 89.4885 43.006C90.5873 42.9826 91.4756 42.115 91.4756 41.0128Z" fill="white" />
						<path d="M89.5817 48.0708C89.5817 46.9687 88.6933 46.1011 87.618 46.1011C86.5193 46.1011 85.6543 46.9921 85.6543 48.0708C85.6543 49.1729 86.5426 50.0405 87.618 50.0405C88.6933 50.0405 89.5817 49.1729 89.5817 48.0708Z" fill="white" />
						<path d="M84.4157 53.2532C84.4157 52.1745 83.5273 51.2834 82.452 51.2834C81.3766 51.2834 80.4883 52.1745 80.4883 53.2532C80.4883 54.3318 81.3766 55.2229 82.452 55.2229C83.5273 55.2229 84.4157 54.3318 84.4157 53.2532Z" fill="white" />
						<path d="M77.379 55.1527C77.379 54.0506 76.4907 53.183 75.4153 53.183C74.34 53.183 73.4517 54.0741 73.4517 55.1527C73.4517 56.2548 74.34 57.1225 75.4153 57.1225C76.4907 57.1225 77.379 56.2314 77.379 55.1527Z" fill="white" />
						<path d="M70.3423 53.2532C70.3423 52.1511 69.454 51.26 68.3552 51.26C67.2565 51.26 66.3682 52.1511 66.3682 53.2532C66.3682 54.3553 67.2565 55.2464 68.3552 55.2464C69.454 55.2229 70.3423 54.3553 70.3423 53.2532Z" fill="white" />
						<path d="M65.199 48.0711C65.199 46.969 64.3106 46.0779 63.2119 46.0779C62.1132 46.0779 61.2249 46.969 61.2249 48.0711C61.2249 49.1732 62.1132 50.0643 63.2119 50.0643C64.2873 50.0643 65.199 49.1732 65.199 48.0711Z" fill="white" />
						<path d="M63.3058 41.0126C63.3058 39.9105 62.4175 38.996 61.2953 38.996C60.1966 38.996 59.2849 39.887 59.2849 41.0126C59.2849 42.1147 60.1732 43.0292 61.2953 43.0292C62.4175 43.0058 63.3058 42.1147 63.3058 41.0126Z" fill="white" />
						<path d="M65.2225 33.9311C65.2225 32.8055 64.3108 31.9144 63.2121 31.9144C62.09 31.9144 61.2017 32.8289 61.2017 33.9311C61.2017 35.0566 62.1134 35.9477 63.2121 35.9477C64.3108 35.9711 65.2225 35.0566 65.2225 33.9311Z" fill="white" />
						<path d="M70.3658 28.7722C70.3658 27.6467 69.4541 26.7556 68.3554 26.7556C67.2333 26.7556 66.345 27.6701 66.345 28.7722C66.345 29.8978 67.2567 30.7889 68.3554 30.7889C69.4775 30.7889 70.3658 29.8744 70.3658 28.7722Z" fill="white" />
						<path d="M77.0753 19.8147C77.0753 18.8767 76.3272 18.1263 75.3921 18.1263C74.4571 18.1263 73.709 18.8767 73.709 19.8147C73.709 20.7527 74.4571 21.503 75.3921 21.503C76.3272 21.503 77.0753 20.7292 77.0753 19.8147Z" fill="white" />
						<path d="M84.2983 21.081C84.2983 20.1665 83.5502 19.4161 82.6385 19.4161C81.7268 19.4161 80.9788 20.1665 80.9788 21.081C80.9788 21.9956 81.7268 22.7459 82.6385 22.7459C83.5502 22.7694 84.2983 22.019 84.2983 21.081Z" fill="white" />
						<path d="M90.657 24.7624C90.657 23.8479 89.9089 23.0975 88.9972 23.0975C88.0855 23.0975 87.3374 23.8479 87.3374 24.7624C87.3374 25.6769 88.0855 26.4273 88.9972 26.4273C89.9089 26.4508 90.657 25.7004 90.657 24.7624Z" fill="white" />
						<path d="M95.3557 30.4139C95.3557 29.4994 94.6076 28.749 93.6959 28.749C92.7842 28.749 92.0361 29.4994 92.0361 30.4139C92.0361 31.3284 92.7842 32.0788 93.6959 32.0788C94.6076 32.0554 95.3557 31.3284 95.3557 30.4139Z" fill="white" />
						<path d="M97.8572 37.331C97.8572 36.4165 97.1091 35.6661 96.1974 35.6661C95.2857 35.6661 94.5376 36.4165 94.5376 37.331C94.5376 38.2456 95.2857 38.9959 96.1974 38.9959C97.1325 38.9725 97.8572 38.2456 97.8572 37.331Z" fill="white" />
						<path d="M97.8573 44.6942C97.8573 43.7797 97.1326 43.0527 96.2209 43.0527C95.3092 43.0527 94.5845 43.7797 94.5845 44.6942C94.5845 45.6087 95.3092 46.3356 96.2209 46.3356C97.1326 46.3356 97.8573 45.6087 97.8573 44.6942Z" fill="white" />
						<path d="M95.3325 51.6117C95.3325 50.7206 94.6078 49.9937 93.7195 49.9937C92.8311 49.9937 92.1064 50.7206 92.1064 51.6117C92.1064 52.5027 92.8311 53.2297 93.7195 53.2297C94.6078 53.2297 95.3325 52.5027 95.3325 51.6117Z" fill="white" />
						<path d="M90.6103 57.2396C90.6103 56.3485 89.8856 55.6216 88.9973 55.6216C88.109 55.6216 87.3843 56.3485 87.3843 57.2396C87.3843 58.1307 88.109 58.8576 88.9973 58.8576C89.8856 58.8576 90.6103 58.1541 90.6103 57.2396Z" fill="white" />
						<path d="M84.2519 60.921C84.2519 60.0299 83.5272 59.303 82.6389 59.303C81.7506 59.303 81.0259 60.0299 81.0259 60.921C81.0259 61.812 81.7506 62.539 82.6389 62.539C83.5272 62.539 84.2519 61.812 84.2519 60.921Z" fill="white" />
						<path d="M77.0285 62.2108C77.0285 61.3197 76.3038 60.5928 75.4155 60.5928C74.5272 60.5928 73.8025 61.3197 73.8025 62.2108C73.8025 63.1018 74.5272 63.8288 75.4155 63.8288C76.3038 63.8288 77.0285 63.1018 77.0285 62.2108Z" fill="white" />
						<path d="M69.8047 60.921C69.8047 60.0299 69.08 59.303 68.1916 59.303C67.3033 59.303 66.5786 60.0299 66.5786 60.921C66.5786 61.812 67.3033 62.539 68.1916 62.539C69.08 62.5624 69.8047 61.8355 69.8047 60.921Z" fill="white" />
						<path d="M63.4693 57.2396C63.4693 56.3251 62.7446 55.5981 61.8329 55.5981C60.9212 55.5981 60.1965 56.3251 60.1965 57.2396C60.1965 58.1541 60.9212 58.881 61.8329 58.881C62.7446 58.881 63.4693 58.1541 63.4693 57.2396Z" fill="white" />
						<path d="M58.7474 51.6117C58.7474 50.6971 58.0227 49.9702 57.111 49.9702C56.1993 49.9702 55.4746 50.6971 55.4746 51.6117C55.4746 52.5262 56.1993 53.2531 57.111 53.2531C57.9993 53.2531 58.7474 52.5262 58.7474 51.6117Z" fill="white" />
						<path d="M56.2458 44.6942C56.2458 43.7797 55.4978 43.0293 54.5861 43.0293C53.6743 43.0293 52.9263 43.7797 52.9263 44.6942C52.9263 45.6087 53.6743 46.3591 54.5861 46.3591C55.4978 46.3591 56.2458 45.6087 56.2458 44.6942Z" fill="white" />
						<path d="M56.269 37.331C56.269 36.4165 55.521 35.6661 54.6092 35.6661C53.6975 35.6661 52.9495 36.4165 52.9495 37.331C52.9495 38.2456 53.6975 38.9959 54.6092 38.9959C55.521 38.9959 56.269 38.2456 56.269 37.331Z" fill="white" />
						<path d="M58.7705 30.4139C58.7705 29.4994 58.0224 28.749 57.1107 28.749C56.199 28.749 55.4509 29.4994 55.4509 30.4139C55.4509 31.3284 56.199 32.0788 57.1107 32.0788C58.0224 32.0788 58.7705 31.3284 58.7705 30.4139Z" fill="white" />
						<path d="M63.5165 24.7623C63.5165 23.8243 62.7684 23.074 61.8333 23.074C60.8982 23.074 60.1501 23.8243 60.1501 24.7623C60.1501 25.7003 60.8982 26.4507 61.8333 26.4507C62.7684 26.4507 63.5165 25.7003 63.5165 24.7623Z" fill="white" />
						<path d="M69.8512 21.0809C69.8512 20.143 69.1031 19.3926 68.168 19.3926C67.2329 19.3926 66.4849 20.143 66.4849 21.0809C66.4849 22.0189 67.2329 22.7693 68.168 22.7693C69.1031 22.7693 69.8512 22.0189 69.8512 21.0809Z" fill="white" />
					</svg>
				</div>
			</div>
		</div>
		<div class="modal-body">
			<slot v-if="slideList.length > 0" name="body">
				<transition :name="fadeDirection" mode="out-in">
					<!-- eslint-disable-next-line vue/no-v-html -->
					<div v-if="slideList[currentSlide].type === 'inline'" :key="currentSlide" v-html="slideList[currentSlide].content" />
					<div :is="slideList[currentSlide]" v-else @finished="currentSlide++" />
				</transition>
			</slot>
		</div>
		<div class="modal-footer">
			<button v-if="isLast" class="primary modal-default-button" @click="close">
				{{ startButtonText }}
			</button>
		</div>
	</Modal>
</template>
<style lang="scss">
	/* Page styling needs to be unscoped, since we load it separately from the server */
	#firstrunwizard {

		.page {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			margin: auto;

			.text-center {
				text-align: center;
			}

			h3 {
				margin: 10px 0 10px;
				line-height: 120%;
				padding: 0;
			}
			.image {
				padding: 20px;
				max-width: calc(50% - 40px);
				flex-grow: 1;
				img {
					width: 100%;
				}
			}
			.content {
				padding: 20px;
				width: 100%;
			}
			p {
				margin-bottom: 20px;
			}
			.description-block:first-child {
				margin-bottom: 20px;
			}
			.description {
				margin: 20px;
				width: auto;
				flex-grow: 1;
				max-width: calc(50% - 40px);
			}
			ul {
				margin: 10px;
				li {
					margin-left: 20px;
					margin-bottom: 10px;
					list-style: circle outside;
				}
			}
			a:not(.button) {
				&:hover,
				&:focus {
					text-decoration: underline;
				}
			}
			.button {
				display: inline-block;

				img {
					width: 16px;
					height: 16px;
					opacity: .5;
					margin-top: -3px;
					vertical-align: middle;
				}
			}
		}

		.content-clients {
			width: 100%;
			text-align: center;
			a {
				text-decoration: none;
				display: inline-block;
			}
			.clientslinks .appsmall {
				height: 32px;
				width: 32px;
				position: relative;
				opacity: .5;
				vertical-align: middle;
			}
			.clientslinks .button {
				display: inline-block;
				padding: 8px;
				font-weight: normal;
				font-size: 14px;
			}
		}
		.content-final {
			h3 {
				background-position: 0;
				background-size: 16px 16px;
				padding-left: 26px;
				opacity: .7;
			}
		}
		p a {
			font-weight: bold;
			color: var(--color-primary);
			&:hover,
			&:focus {
				color: var(color-text-light);
			}
		}

		.footnote {
			margin-top: 40px;
		}

		// primary on next button
		.modal-wrapper .icon-next {
			background-color: var(--color-primary);
			color: var(--color-primary-text);
			box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
			left: 22px;
		}
	}

	.clientslinks {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	#wizard-values {
		list-style-type: none;
		display: flex;
		flex-wrap: wrap;
		margin: 0;
		li {
			display: block;
			min-width: 250px;
			width: 33%;
			flex-grow: 1;
			margin: 20px 0 20px 0;
			span {
				opacity: .7;
				display: block;
				height: 50px;
				width: 50px;
				background-size: 40px;
				margin: auto;
			}
			h3 {
				margin: 10px 0 10px 0;
				font-size: 130%;
				text-align: center;
			}
			svg {
				display: block;
				margin: 0 auto 10px;
				width: 70px;
				height: auto;
			}
		}
	}

	.app-buttons {
		margin-bottom: 50px;
	}

	.roundcube-migration {
		margin-bottom: 40px!important;
	}

	.details-link {
		text-align: center;
	}

	@media only screen and (max-width: 680px) {
		#firstrunwizard {
			h2 {
				font-size: 20px;
			}
			.page > div {
				max-width: 100% !important;
				width: 100%;
			}
			.page #wizard-values li {
				min-width: 100%;
				overflow: hidden;
				display: flex;
				span {
					width: 44px !important;
					padding-right: 20px;
					flex-grow: 0;
				}
				h3 {
					font-size: 12px;
					text-align: left;
					flex-grow: 1;
				}
			}
		}
	}
</style>

<style lang="scss" scoped>
	.modal-mask {
		background-color: rgba(0, 0, 0, 0.7);

		&::v-deep .modal-wrapper {
			position: relative;
		}

		&::v-deep .modal-container {
			display: flex;
			flex-direction: column;
			height: 95% !important;
			width: 95% !important;
			max-width: 900px;
			max-height: 650px !important;
			position: relative;
		}

		.modal-body {
			flex-grow: 1;
			display: flex;
			overflow-x: hidden;
			overflow-y: auto;

			& > div {
				display: flex;
				flex-grow: 1;
				align-items: center;
				justify-content: center;
			}
		}
	}

	.modal-header {
		overflow: hidden;
		flex-shrink: 0;

		.firstrunwizard-header {
			padding: 20px 12px;
			background: var(--color-primary) var(--image-login-background) no-repeat 50% 50%;
			background-size: cover;
			color: var(--color-primary-text);
			text-align: center;
			.logo {
				margin: 20px auto 15px;

				svg {
					width: 200px;
					height: auto;
				}
			}
			h2 {
				font-size: 20px;
				margin-top: 7px;
				line-height: 150%;
				color: var(--color-primary-text);
				font-weight: 300;
				padding: 0 0 10px;
			}
		}
	}

	.modal-default-button {
		align-self: flex-end;
	}

	.modal-footer {
		overflow: hidden;
		position: absolute;
		display: flex;
		bottom: 0;
		right: 0;
	}

	.modal-footer button {
		margin: 10px;
	}

	/* Transitions */
	.next-enter-active, .next-leave-active,
	.previous-enter-active, .previous-leave-active {
		transition: transform .1s, opacity .25s;
	}

	.next-enter {
		transform: translateX(50%);
		opacity: 0;
	}

	.next-leave-to {
		transform: translateX(-50%);
		opacity: 0;
	}

	.previous-enter {
		transform: translateX(-50%);
		opacity: 0;
	}

	.previous-leave-to {
		transform: translateX(50%);
		opacity: 0;
	}
</style>
<script>
import Modal from '@nextcloud/vue/dist/Components/Modal'
import axios from '@nextcloud/axios'
import { generateUrl } from '@nextcloud/router'
import IntroVideo from './components/IntroVideo'

export default {
	name: 'App',
	components: {
		Modal,
	},
	data() {
		return {
			showModal: false,
			withIntro: true,
			slides: [],
			currentSlide: 0,
			fadeDirection: 'next',
			isMobile: window.outerWidth < 1024,
			slidesLoaded: false,
		}
	},
	computed: {
		slideList() {
			if (this.withIntro) {
				return this.slides
			}
			const slides = this.slides
			return slides.slice(1)
		},
		hasNext() {
			return this.currentSlide < this.slideList.length - 1
		},
		hasPrevious() {
			return this.currentSlide > 0
		},
		isLast() {
			return this.currentSlide === this.slideList.length - 1
		},
		isFirst() {
			return this.currentSlide === 0
		},
		startButtonText() {
			return t('firstrunwizard', 'Start using {cloudName}', { cloudName: window.OC.theme.name })
		},
	},
	async created() {
		this.slides = [ IntroVideo ]
		window.addEventListener('resize', this.onResize)
	},
	beforeDestroy() {
		window.removeEventListener('resize', this.onResize)
	},
	methods: {
		async loadStaticSlides() {
			if (this.slidesLoaded) {
				return
			}

			try {
				const response = await axios.get(generateUrl('/apps/firstrunwizard/wizard'))
				this.slides.push(...response.data.slides)
				this.withIntro = response.data.hasVideo
				this.slidesLoaded = true
			} catch (e) {
				console.error('Failed to load slides')
			}
		},
		async open(withIntro = true) {
			await this.loadStaticSlides()
			this.withIntro = this.withIntro & withIntro
			this.showModal = true
			this.currentSlide = 0
		},
		close() {
			this.showModal = false
			axios.delete(generateUrl('/apps/firstrunwizard/wizard'))
		},
		next() {
			this.fadeDirection = 'next'
			if (this.isLast) {
				this.close()
				return
			}
			this.currentSlide += 1
		},
		previous() {
			this.fadeDirection = 'previous'
			if (this.isFirst) {
				return
			}
			this.currentSlide -= 1
		},
		onResize(event) {
			// Update mobile mode
			this.isMobile = window.outerWidth < 768
		},
	},
}
</script>
