export const classToString = (...classes) => {
	return classes.join(' ');
};

export const getFormattedClass = (element, className) => {
	return `${element}-${className}`;
};
