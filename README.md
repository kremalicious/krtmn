# krt.mn

My own url shortener based on [yourls - Your Own URL Shortener](http://yourls.org/) ([Google Code](http://code.google.com/p/yourls/))

It has a public front page under http://krt.mn with the latest shortened url. The backend is a completely restyled interface based on the YOURLS default styles (which are quite ugly). Here's what it looks like in the admin area:

![](http://f.cl.ly/items/2M0C2N1z0q3S0J0O0c2J/krtmn-admin-screen.png)

Everything custom is happening in `/user`:

- `user/plugins/my-own-stuff/plugin.php` adds css file link and a bit more dynamically to the html `head`
- `user/css/krtmn.css` overwrites the default styles


## License & Usage

As the original YOURLS you're free to do whatever you want with this. But using this without further modifications as your own url shortener is probably not a good idea.


## Acknowledgements

Many thanks to:
- Ozh Richard ([@ozh](https://twitter.com/ozh)) for creating yourls
- Fort Awesome ([@fortaweso_me](https://twitter.com/fortaweso_me)) for creating the [Font Awesome icon font](http://fortawesome.github.com/Font-Awesome)