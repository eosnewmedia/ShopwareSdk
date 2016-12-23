<?php
namespace Enm\ShopwareSdk\Model\Media;

use Enm\ShopwareSdk\Model\RootModelInterface;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
interface MediaInterface extends RootModelInterface
{

	/**
	 * @return string
	 */
	public function getName(): string;



	/**
	 * @param string $name
	 *
	 * @return MediaInterface
	 */
	public function setName(string $name): MediaInterface;



	/**
	 * @return string
	 */
	public function getDescription(): string;



	/**
	 * @param string $description
	 *
	 * @return MediaInterface
	 */
	public function setDescription(string $description): MediaInterface;



	/**
	 * @return string
	 */
	public function getPath(): string;



	/**
	 * @param string $path
	 *
	 * @return MediaInterface
	 */
	public function setPath(string $path): MediaInterface;



	/**
	 * @return string
	 */
	public function getType(): string;



	/**
	 * @param string $type
	 *
	 * @return MediaInterface
	 */
	public function setType(string $type): MediaInterface;



	/**
	 * @return string
	 */
	public function getExtension(): string;



	/**
	 * @param string $extension
	 *
	 * @return MediaInterface
	 */
	public function setExtension(string $extension): MediaInterface;



	/**
	 * @return int
	 */
	public function getWidth(): int;



	/**
	 * @param int $width
	 *
	 * @return MediaInterface
	 */
	public function setWidth(int $width): MediaInterface;



	/**
	 * @return int
	 */
	public function getHeight(): int;



	/**
	 * @param int $height
	 *
	 * @return MediaInterface
	 */
	public function setHeight(int $height): MediaInterface;



	/**
	 * @return int
	 */
	public function getUserId(): int;



	/**
	 * @param int $userId
	 *
	 * @return MediaInterface
	 */
	public function setUserId(int $userId): MediaInterface;



	/**
	 * @return string
	 */
	public function getCreated(): string;



	/**
	 * @param string $created
	 *
	 * @return MediaInterface
	 */
	public function setCreated(string $created): MediaInterface;
}