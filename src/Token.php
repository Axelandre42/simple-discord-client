<?php

namespace DiscordRest;

/**
 * Token representation class to use with the API.
 */
class Token
{
	/**
	 * Constant for "bot" token type to use most API features.
	 */
	const TYPE_BOT = 'Bot';

	/**
	 * Constant for "bearer" token type provided by OAuth2 authentication flow.
	 *
	 * @see https://discord.com/developers/docs/topics/oauth2
	 */
	const TYPE_BEARER = 'Bearer';

	/**
	 * @var string The type of the token.
	 */
	private string $type;

	/**
	 * @var string The Discord API token to be used while authenticating.
	 */
	private string $token;

	/**
	 * Constructs a token instance.
	 * @param string $type The type of the token.
	 * @param string $token The Discord API token to be used while authenticating.
	 */
	public function __construct(string $token, string $type = self::TYPE_BOT)
	{
		$this->type = $type;
		$this->token = $token;
	}

	/**
	 * @return string The type of the token.
	 */
	public function getType(): string
	{
		return $this->type;
	}

	/**
	 * @return string The value of the token.
	 */
	public function getToken(): string
	{
		return $this->token;
	}
}