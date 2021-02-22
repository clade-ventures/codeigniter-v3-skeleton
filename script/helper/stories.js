export const storiesSelectOption = (name, options = [], defaultValue = '') => ({
	control: {
		name,
		defaultValue,
		options,
		type: 'select',
	}
})
