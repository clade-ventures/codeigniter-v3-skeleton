import { html } from 'lit-html';

import './typography.js';
import { TYPOGRAPHY_VARIANT } from './typography.const';
import COLORS from '../../../constants/colors.js';

export default {
  title: 'Typography',
};

export const H = ({ text, variant, color }) => html`
	<typography-atom
		attr-id="H1"
		text="${text}"
		color="${color}"
		variant="${variant}"
	/>
`;

H.argTypes = {
	text: {
		name: 'Text',
		type: { name: 'string', required: true },
		defaultValue: 'H Control',
		control: {
			type: 'text'
		}
	},
	color: {
		name: 'Color',
		defaultValue: COLORS.BLACK.KEY,
		control: {
			type: 'select',
			options: Object.keys(COLORS),
			defaultValue: COLORS.BLACK.KEY,
		}
	},
	variant: {
		name: 'Variant',
		type: { name: 'string', required: true },
		description: 'Variant adalah ukuran huruf yang telah ditentukan',
		defaultValue: TYPOGRAPHY_VARIANT.H2.KEY,
		control: {
			type: 'select',
			options: Object.keys(TYPOGRAPHY_VARIANT),
			defaultValue: TYPOGRAPHY_VARIANT.H2.KEY,
		}
	},
};

export const H0 = () =>
  html`
		<typography-atom
			attr-id="H0"
			text="H0"
			variant="${TYPOGRAPHY_VARIANT.H0.KEY}"
		>
		</typography-atom>
  `;


export const H1 = () =>
  html`
		<typography-atom
			attr-id="H1"
			text="H1"
			variant="${TYPOGRAPHY_VARIANT.H1.KEY}"
		>
		</typography-atom>
  `;
