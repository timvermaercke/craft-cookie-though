fetch('/actions/cookie-though/default/index')
  .then((response) => response.json())
  .then((config) => CookieThough.init(config));
