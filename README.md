IPBadge
=====

IPv4/v6 badge output script

![Connected via IPv4](https://raw.githubusercontent.com/wakamesoba98/ipbadge/master/ipv4.png)

![Connected via IPv6](https://raw.githubusercontent.com/wakamesoba98/ipbadge/master/ipv6.png)

# Requirements

- php
- php-fpm
- php-gd

# Setup

Edit your `php.ini`.

```ini
extension=gd.so
```

# Usage

Add this element in your HTML document.

```html
<img alt="Check IP version" src="ipbadge.php" />
```

# License

The MIT License (MIT)
