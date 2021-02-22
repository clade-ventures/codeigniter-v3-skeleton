export const getAttribute = (el, attributeName, defaultValue = null) => {
	return el.getAttribute(attributeName) || defaultValue;
};
