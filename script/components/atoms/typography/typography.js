import { getAttribute } from "../../../helper/elements.js";
import { classToString, getFormattedClass } from "../../../helper/attributes.js";
import { TYPOGRAPHY_VARIANT, TYPOGRAPHY_TAG_NAME } from './typography.const.js';
import COLORS from "../../../constants/colors.js";

class TypographyElement extends HTMLElement {

	constructor() {
    super();
  }

  connectedCallback() {
    // browser calls this method when the element is added to the document
    // (can be called many times if an element is repeatedly added/removed)
		this.render();
  }

  disconnectedCallback() {
    // browser calls this method when the element is removed from the document
    // (can be called many times if an element is repeatedly added/removed)
  }

  static get observedAttributes() {
    return ['text', 'variant', 'color'];
  }

  attributeChangedCallback(name, oldValue, newValue) {
    this.render();
  }

  adoptedCallback() {
    // called when the element is moved to a new document
    // (happens in document.adoptNode, very rarely used)
  }

	// our method
	render() {
			const defaultColor = COLORS.BLACK.KEY;
			const defaultTypography = TYPOGRAPHY_VARIANT.DESC_3.KEY;

			// Get attribute
			const IDAttr = getAttribute(this, 'attr-id', '');
			const textAttr = getAttribute(this, 'text', '');
			const classNameAttr = getAttribute(this, 'class-name', '');
			const colorAttr = getAttribute(this, 'color', defaultColor);
			const variantAttr = getAttribute(this, 'variant', defaultTypography);

			const color = COLORS[colorAttr].CSS || COLORS[defaultColor].CSS;
			const typography = TYPOGRAPHY_VARIANT[variantAttr] || TYPOGRAPHY_VARIANT[defaultTypography];
			const tagAttr = getAttribute(this, 'tag', typography.TAG);

			const classes = classToString(
				classNameAttr,
				getFormattedClass(TYPOGRAPHY_TAG_NAME, typography.CSS),
			);

			// return HTML
			this.innerHTML = `
				<${tagAttr}
					id="${IDAttr}"
					class="${classes}"
					style="color: var(${color})"
				>
					${textAttr}
				</${tagAttr}>
			`;
	}
}

customElements.define(TYPOGRAPHY_TAG_NAME, TypographyElement);
