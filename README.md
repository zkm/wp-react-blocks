# wp-react-blocks
## Installation

With Docker installed and running, in Terminal:

````
git clone git@github.com:zkm/wp-react-blocks.git
cd wp-react-blocks
````

Then:

````
docker-compose up -d
````

Then in your browser:
````
http://localhost:2023/
````
## Generate block using @wordpress/create-block
```bash
npx @wordpress/create-block hero --namespace wp-react-blocks --title "Hero" --short-description="For when you need a hero" --category wp-react-blocks
````
