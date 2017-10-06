<?php
/**
 * @file
 * Initial Acounting Setup Controller.
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\DecimaMarioGallegos\Controllers;

use Mgallegos\DecimaCms\Cms\Services\BlogManagement\BlogManagementInterface;

use Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface;

use Mgallegos\DecimaCms\Cms\Services\TagManagement\TagManagementInterface;

use Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface;

use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

use Illuminate\View\Factory;

use Illuminate\Filesystem\Filesystem;

use Illuminate\Database\DatabaseManager;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Routing\UrlGenerator;

use Illuminate\Mail\Mailer;

use Maatwebsite\Excel\Excel;

use Mgallegos\LaravelJqgrid\Facades\GridEncoder;

use App\Http\Controllers\Controller;

class BlogManager extends Controller {

	/**
	 * Blog Manager Service
	 *
	 * @var Mgallegos\DecimaCms\Cms\Services\BlogManagement\BlogManagementInterface
	 *
	 */
	protected $BlogManagerService;

	/**
	 * Setting Manager Service
	 *
	 * @var Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface
	 *
	 */
	protected $SettingManagerService;

	/**
	* Tag Manager Service
	*
	* @var Mgallegos\DecimaSale\Sale\Services\TagManagement\TagManagementInterface
	*
	*/
	protected $TagManagerService;

	/**
	 * Client Manager Service
	 *
	 * @var Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface
	 *
	 */
	protected $ClientManagerService;

	/**
	 * View
	 *
	 * @var Illuminate\View\Factory
	 *
	 */
	protected $View;

	/**
	 * Input
	 *
	 * @var Illuminate\Http\Request
	 *
	 */
	protected $Input;

	/**
	 * Session
	 *
	 * @var Illuminate\Session\SessionManager
	 *
	 */
	protected $Session;

	/**
	 * File
	 *
	 * @var Illuminate\Filesystem\Filesystem
	 *
	 */
	protected $File;

	/**
	* Excel
	*
	* @var Maatwebsite\Excel\Excel
	*/
	protected $Excel;

	/**
	 * Mailer
	 *
	 * @var Illuminate\Mail\Mailer
	 */
	protected $Mailer;

	/**
	 * The URL generator instance
	 *
	 * @var \Illuminate\Routing\UrlGenerator
	 *
	 */
	protected $Url;

	public function __construct(BlogManagementInterface $BlogManagerService, SettingManagementInterface $SettingManagerService, TagManagementInterface $TagManagerService, ClientManagementInterface $ClientManagerService, Factory $View, Request $Input, SessionManager $Session, Filesystem $File, Excel $Excel, DatabaseManager $DB, Mailer $Mailer, UrlGenerator $Url)
	{
		$this->BlogManagerService = $BlogManagerService;

		$this->SettingManagerService = $SettingManagerService;

		$this->TagManagerService = $TagManagerService;

		$this->ClientManagerService = $ClientManagerService;

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;

		$this->File = $File;

		$this->Excel = $Excel;

		$this->DB = $DB;

		$this->Mailer = $Mailer;

		$this->Url = $Url;

		/*8 antes de dar push*/
		$this->OrganizationId = 1;
		// $this->OrganizationId = 8;
	}

	public function getIndex()
	{
		$postPerPage = 10;
		$types = array('T');

		$blogUrl = $this->Url->to('/') . '/cms/tutorials';
		$blogId = $this->Session->get('blogId', '');
		$blogPosts = $this->BlogManagerService->getBlogPosts($postPerPage, 1, null, $types, null, null, null, 'date', 'desc', $blogId, $this->OrganizationId, true);

		if(!empty($blogId) && count($blogPosts['blogPosts']) == 1)
		{
			$ogTitle = $blogPosts['blogPosts'][0]['tittle'];
			$ogDescription = $blogPosts['blogPosts'][0]['summary'];
			$ogImage = $blogPosts['blogPosts'][0]['preview_image_url'];
		}
		else
		{
			$ogTitle = $ogDescription = $ogImage = null;
		}

		return $this->View->make('decima-mario-gallegos::blog')
			->with('prefix', 'cms-blog-')
			->with('ogTitle', $ogTitle)
			->with('ogDescription', $ogDescription)
			->with('ogImage', $ogImage)
			->with('postPerPage', $postPerPage)
			->with('blogUrl', $blogUrl)
			->with('blogId', $blogId)
			->with('organizationId', $this->OrganizationId)
			// ->with('blogType', 'ilustration')
			->with('types', $types)
			->with('orderBy', $this->BlogManagerService->getOrderBy())
			->with('tags', $this->TagManagerService->getTagsByBlogTypes($types, $this->OrganizationId))
			->with('blogPosts', $blogPosts);

	}
}
