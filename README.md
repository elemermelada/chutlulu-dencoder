# Chutlulu dencoder
### Simple service to encode messages
![C++](https://img.shields.io/badge/-C++-blue?logo=cplusplus) ![php](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
## Summary
The algorithm is implemented in `C++`, and the `PHP` wrapper executes the compiled `C++` binary to respond to dencoding requests.

## Installation
The `C++` code must be first compiled, for instance using `g++`:

```bash
g++ main.cpp
```
Make sure the binary file is named `a.out`, or modify `index.php` instead.

After this, `Apache2` can be used to serve the `php` engine.

> Based in the [original algorithm](https://github.com/bolito2/Chutlulu) by Bolito2 written in `Java`.
