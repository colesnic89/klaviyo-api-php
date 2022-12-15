# Changelog

NOTE: For more granular API-specific changes, please see our [API Changelog](https://developers.klaviyo.com/en/docs/changelog_)

## 1.0.0

  * Initial release

  Differences between 1.0.0 and BETA:

  - Naming changes
    - Packagist package name: `klaviyo/sdk-beta` → `klaviyo/api`
    - Namespace: `KlaviyoBeta` → `KlaviyoAPI`
    - client name: `Client` → `KlaviyoAPI`
    - Client variable name in readme examples: `$client` → `$klaviyo`
    - Some functions have changed name
  - Parameter ordering: The order of params has changed; you will need to update these for your existing implementation to work

## 1.1.0

  - added Data Privacy endpoint (previously in beta)
