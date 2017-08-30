<?php
/*
 * DO NOT PUBLISH THE KEY, SECRET AND CERT TO CODE REPOSITORIES
 * FOR SECURITY. PLEASE USE LARAVEL'S .envFILES TO PROTECT
 * SENSITIVE DATA.
 * http://laravel.com/docs/master/configuration#environment-configuration
 *
 * Some sensible defaults have been provided so you can use .env files by adding
 * `SSO_KEY`, `SSO_SECRET`, and `SSO_CERT` to your `.env` (production).
 *
 * NOTE THAT THE `SSO_CERT` MUST BE ON ONE LINE IN `.env`: use `SSO_CERT="[private key]"`, replace line breaks with `\n`
 *
 * Modify the three constants below to match the keys in your .env, otherwise it will use what you enter
 * on the second line of the key/secret/cert elements
 */

return [

	/*
	 * The location of the VATSIM OAuth interface
	 */
	'base'            => env('SSO_BASEURL'),

	/*
	 * The consumer key for your organisation (provided by VATSIM)
	 */
	'key'             => env('SSO_KEY'),

	/*
	* The secret key for your organisation (provided by VATSIM)
	* Do not give this to anyone else or display it to your users. It must be kept server-side
	*/
	'secret'          => env('SSO_SECRET'),

	/*
	 * The URL users will be redirected to after they log in, this should
	 * be on the same server as the request
	 */
	'return'          => '', //not sensitive

	/*
	 * The signing method you are using to encrypt your request signature.
	 * Different options must be enabled on your account at VATSIM.
	 * Options: RSA / HMAC
	 */
	'method'          => 'RSA',

	/*
	 * Your RSA **PRIVATE** key
	 * If you are not using RSA, this value can be anything (or not set)
	 */
	'cert'            => '-----BEGIN RSA PRIVATE KEY-----
						MIIEowIBAAKCAQEAp1Ba4OjLD7S9BBZy/WQMMKA9D8fvlRVs/dnRKgNIWltf4dwo
						iGckhHTcnll0zaLJODoPyLEsgLMn8rtssP8ZZDa/uQ7G4Lm3Tvd7SgM1Ok9cIAGE
						0vsu2TfdNCxBCKCq5Ov+kGq51Balb547LTpOte23vVlI9fGs8zMIjkN1/Gc9JS+M
						jOPJG2kiH2DrSy4GjsXuv25rNvOpBJYXUvxuhb9FTXyiAa60YpzXqSMW0W5S3bwQ
						AKv0aqHD8Fs8aPvFWbexeAWDYjQSQlfHDshVLyTB1ZfKP8BVJggt/gd2DM6MbjFv
						/BZL4S7/d1HB7ke2hb/r8bgGvi7OWqRHdIj+kwIDAQABAoIBAAOev3iiUNJ0LKrL
						+Yz1/zWGIgwXXV2yavtLHTV1gLlDxN1UMCRTZvzesm9SrC5O2V+4EeNbwgS+25xq
						5b0mp9v9O0S7xx3Rpt+0hxxg2WP7l5ixr7gI60iT5ttcIcQYBdqSKJ3jUUX/f3Dc
						0Zb27gENta4JIoT/x6gzcHnzh7gAUt8aYGklBbaM6zpAI7nyfSpn19NFDOqeRMoD
						ToAftnNrZBn6TthlD8dFMEOheBMRnbjYrmybn64unOXo8TUCaJC0lj0Om5kU0Ujc
						Ksl1Cd2MEjmOvEWQqFcN++qyiejQXnDCiekut+vUC7KmOArhG3u2N7NOpWhIGozz
						QtUGLwECgYEA3GQ3hqJI1kCGADqyJm2b1CAtW1p5Eu9CjDKURxExrxE5OW7r6zqY
						U5MJypj5XkzSrt/Jt559M7cOrp21vziwrhgxN/Uq1unc+331toA68G/fkt1uR6PF
						+53HJZmVSn3w4Uu3+kDTBcEFsotiq2rAHPOZ7Kl7+gbwgP1FQpeo6sECgYEAwljB
						Olu5H7R/4LBxB6XtWOe760uGdk8PdZfbcnsp95P3JfsEG8A+bQcBQxN19c2ZsUSk
						2LE/q8taMzKKNPulb4R6Bx2Z7G+ZdcmJfDle8APipumLwKjPCcmMrrk3NLOlHWQD
						RK0RPyqjbadYZWPoqavWquCLW0MRBJlX1junYlMCgYAPeBlNoeZq42yEZ5pJiDf/
						06JbXyZQZerN3F77/gD2wMa7eUWl5R77/r4ZMlOOguXm0F5gPQecsaSeLQOswFXm
						YlxSCStQmmmgXV75yFZauf9/V3t+G8ixuIlZ4kXQTLazmZT4Q8SMCthTh+UNExkY
						7yBGtD63dfU7mItb+TkqAQKBgQC2QzKEHn1RJKBBAngeahhbpohwNJZX4fFnoREn
						HibPjy7bqbvCotpouYcPdvLLoRQgUXYf2qsR3FYtaZp/8fjGywD+J16xhD/xXR7Z
						J5zHj31CeAiemDICxchwHDeP72JMW/1MrNpd2QkHz0dxXu9WIFfkTU2kOxN8sqrT
						uYJTDQKBgDneRBwyodL/nXPDD9TzRKFkSKof5pY0KXMW0t+jXTr1QFHMZXwGS7gN
						iEPLwu6keb33WPGFrpnm6JEIThv4xS7xsYvrchZi6XMrearfRq3rKp80QqJjeuQz
						dXRc7PJZ3XUsrx+0BjwG4REOybegXLouGW7faj+1dvDpvA6la5f7
						-----END RSA PRIVATE KEY-----
						',

	/*
	 * Set to true to allow suspended users to sign in
	 */
	'allow_suspended' => false,

	/*
	 * Set to true to allow inactive users to sign in
	 */
	'allow_inactive'  => false,

];
