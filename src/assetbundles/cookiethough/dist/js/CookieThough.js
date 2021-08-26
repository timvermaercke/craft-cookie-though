fetch('/actions/cookie-though/config/config')
  .then((response) => response.json())
  .then((config) => CookieThough.init(config));
