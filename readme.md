# CodeIgniter Skeleton Project
This Project include unit testing with PHPUnit and atomic design structure with web component and storybook

## Setup Project
To setup this project, we need to install 2 part:
1. Install PHP Dependecies
`composer require`
2. Install Javascript Dependencies
`yarn install` or `npm run install`

## Run Project
This project have 2 web, the main and component documentation:
- To run the main web, we need to run the server in local (XAMPP)
- To run the component documentation, we can write this command to terminal `yarn run storybook`

## Project Structure

	|-- application (CodeIgniter folder)
	|-- system (CodeIgniter folder)
	|-- .storybook
		|-- Introduction.stories.mdx (storybook homepage)
		|-- main.js (define stories and addons)
		|-- preview-head.html (define something to tag head, ex: atomic css)
		|-- preview.js (option, ex: disable some column in control tab)
	|-- assets
		|-- css
			|-- atomic-css
				|-- index.css (load all atomic css)
				|-- typography.style.css
			|-- index.xss (load all css)
		|-- fonts
		|-- images
		|-- js
		|-- storybook (storybook homepage asset)
	|-- script
		|-- index.js (import components/index.js)
		|-- api
		|-- constants
		|-- helpers
		|-- components
			|-- atoms
				|-- index.js (import all atoms)
				|-- typography
					|-- typography.js (custom element/web component)
					|-- typography.const.js (local constants)
					|-- typography.stories.js (component documentation)
			|-- molecules
			|-- organisms
			|-- templates
			|-- index.js (load each index.js in atoms/molecules/organims/templates)
				

## Common Issues
We can read this, if we found some issue (update this when we found some issue)
1. Error when installing storybook dependecy.\ Solution: Make sure we use NPM 6.x.x LTS
