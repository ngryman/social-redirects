# Social redirects

Add **social glyph urls** to your blog.

## What?

From the original idea of [Paul Irish], you can redirect some **glyph urls** from your blog to your profile on any social
network: Google Plus, Twitter, Github, ...

For example, if your blog domain is `you.com`, here are some **glyph urls**:
- `http://you.com/@` → twitter
- `http://you.com/~` → github
- `http://you.com/+` → google plus
- `http://you.com/f` → facebook
- `http://you.com/in` → linkedin

[Paul Irish]: https://twitter.com/sindresorhus/status/331404255837708288

## Why?

Because this obviously rocks!

Enabling those redirections is a kind of *standard way* to share your other profiles over different networks.<br>
Your blog domain is very often simply made of your **nickname** or your **full name**, the same used everywhere.
Appending a social network glyph to your name (`you.com/@`), rather than the opposite (`twitter.com/you`), make things clear for everyone on how to find you.

You can imagine this being the same as social widgets, but for your domain.

## Glyphs

Network     | Glyph | Source url | Destination url     |
------------|-------|------------|---------------------|
Twitter     |   @   | you.com/@  | twitter.com/you     |
Github      |   ~   | you.com/~  | github.com/you      |
Google Plus |   +   | you.com/+  | plus.google.com/you |
Facebook    |   f   | you.com/f  | facebook.com/you    |
LinkedIn    |   in  | you.com/in | linkedin.com/in/you |

## Configuration

### Server configs

These servers are supported:
- apache
- express
- iis
- lighttpd
- nginx

Just copy and paste the config fragment to you blog server config, and replace `:you` with your nickname.

### Static config

If you are using **Github Pages** to host your blog, or anything similar, you can simply drop all folders in **static**
at the root level of your blog. They each contain a simple `index.html` to do the redirect.

### Webapp config

If for any reason, your blog is a *one page webapp*, just copy and paste the code fragment to handle redirection, before
any other routing code.

## Contribute!

Any new server config, network, idea is welcomed. They all can land in a new issue, or a pull request.

[![githalytics.com alpha](https://cruel-carlota.pagodabox.com/5ac49dc572a88b74b54470a3cbde3b4b "githalytics.com")](http://githalytics.com/ngryman/social-redirects)