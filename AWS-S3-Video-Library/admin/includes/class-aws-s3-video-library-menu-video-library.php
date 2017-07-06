<?php
/**
 * User: DouglasLogan
 * Date: 4/1/2017
 * Time: 4:39 PM
 */

 class AWSS3VideoLibrary_menu_videoLibrary {
 	const templateHTML = '
<table class="wp-list-table widefat fixed striped posts">
   <thead>
      <tr>
         <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td>
         <th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" id="author" class="manage-column column-author">Author</th>
         <th scope="col" id="categories" class="manage-column column-categories">Categories</th>
         <th scope="col" id="tags" class="manage-column column-tags">Tags</th>
         <th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th>
         <th scope="col" id="date" class="manage-column column-date sortable asc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" id="wpseo-score" class="manage-column column-wpseo-score">SEO</th>
         <th scope="col" id="wpseo-score-readability" class="manage-column column-wpseo-score-readability">Readability</th>
         <th scope="col" id="wpseo-title" class="manage-column column-wpseo-title hidden">SEO Title</th>
         <th scope="col" id="wpseo-metadesc" class="manage-column column-wpseo-metadesc hidden sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=wpseo-metadesc&amp;order=asc"><span>Meta Desc.</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" id="wpseo-focuskw" class="manage-column column-wpseo-focuskw hidden sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=wpseo-focuskw&amp;order=asc"><span>Focus KW</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" id="ws_plugin__s2member_pro_lock_icons" class="manage-column column-ws_plugin__s2member_pro_lock_icons">(s2)</th>
      </tr>
   </thead>
   <tbody id="the-list">
      <tr id="post-1875" class="iedit author-self level-0 post-1875 type-post status-publish format-image has-post-thumbnail hentry category-join-the-adventure post_format-post-format-image">
         <th scope="row" class="check-column">
            <label class="screen-reader-text" for="cb-select-1875">Select Welcome!</label>
            <input id="cb-select-1875" type="checkbox" name="post[]" value="1875">
            <div class="locked-indicator">
               <span class="locked-indicator-icon" aria-hidden="true"></span>
               <span class="screen-reader-text">“Welcome!” is locked</span>
            </div>
         </th>
         <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
            <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
            <strong><a href="edit.php?post_format=image&amp;post_type=post" class="post-state-format post-format-icon post-format-image">Image:</a><a class="row-title" href="https://dev.op.life/wp-admin/post.php?post=1875&amp;action=edit" aria-label="“Welcome!” (Edit)">Welcome!</a></strong>
            <div class="hidden" id="inline_1875">
               <div class="post_title">Welcome!</div>
               <div class="post_name">welcome</div>
               <div class="post_author">1</div>
               <div class="comment_status">open</div>
               <div class="ping_status">open</div>
               <div class="_status">publish</div>
               <div class="jj">15</div>
               <div class="mm">03</div>
               <div class="aa">2017</div>
               <div class="hh">06</div>
               <div class="mn">45</div>
               <div class="ss">09</div>
               <div class="post_password"></div>
               <div class="page_template">default</div>
               <div class="post_category" id="category_1875">14</div>
               <div class="tags_input" id="post_tag_1875"></div>
               <div class="sticky"></div>
               <div class="post_format">image</div>
            </div>
            <div class="row-actions"><span class="edit"><a href="https://dev.op.life/wp-admin/post.php?post=1875&amp;action=edit" aria-label="Edit “Welcome!”">Edit</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" aria-label="Quick edit “Welcome!” inline">Quick&nbsp;Edit</a> | </span><span class="trash"><a href="https://dev.op.life/wp-admin/post.php?post=1875&amp;action=trash&amp;_wpnonce=7d08a17a17" class="submitdelete" aria-label="Move “Welcome!” to the Trash">Trash</a> | </span><span class="view"><a href="https://dev.op.life/welcome/" rel="permalink" aria-label="View “Welcome!”">View</a></span></div>
            <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
         </td>
         <td class="author column-author" data-colname="Author"><a href="edit.php?post_type=post&amp;author=1">Outpostlife</a></td>
         <td class="categories column-categories" data-colname="Categories"><a href="edit.php?category_name=join-the-adventure">Join the Adventure!</a></td>
         <td class="tags column-tags" data-colname="Tags"><span aria-hidden="true">—</span><span class="screen-reader-text">No tags</span></td>
         <td class="comments column-comments" data-colname="Comments">
            <div class="post-com-count-wrapper">
               <span aria-hidden="true">—</span><span class="screen-reader-text">No comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No comments</span></span>		
            </div>
         </td>
         <td class="date column-date" data-colname="Date">Published<br><abbr title="2017/03/15 6:45:09 am">2017/03/15</abbr></td>
         <td class="wpseo-score column-wpseo-score" data-colname="SEO">
            <div aria-hidden="true" title="Focus keyword not set." class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Focus keyword not set.</span>
         </td>
         <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability">
            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Not available</span>
         </td>
         <td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Welcome! - Outpost</td>
         <td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td>
         <td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Focus KW"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyword not set.</span></td>
         <td class="ws_plugin__s2member_pro_lock_icons column-ws_plugin__s2member_pro_lock_icons" data-colname="(s2)"><span style="cursor:help;" title="Publicly Available">—</span></td>
      </tr>
      <tr id="post-832" class="iedit author-self level-0 post-832 type-post status-publish format-standard has-post-thumbnail hentry category-join-the-adventure">
         <th scope="row" class="check-column">
            <label class="screen-reader-text" for="cb-select-832">Select Trekkers United</label>
            <input id="cb-select-832" type="checkbox" name="post[]" value="832">
            <div class="locked-indicator">
               <span class="locked-indicator-icon" aria-hidden="true"></span>
               <span class="screen-reader-text">“Trekkers United” is locked</span>
            </div>
         </th>
         <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
            <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
            <strong><a class="row-title" href="https://dev.op.life/wp-admin/post.php?post=832&amp;action=edit" aria-label="“Trekkers United” (Edit)">Trekkers United</a></strong>
            <div class="hidden" id="inline_832">
               <div class="post_title">Trekkers United</div>
               <div class="post_name">trekkersunited</div>
               <div class="post_author">1</div>
               <div class="comment_status">open</div>
               <div class="ping_status">open</div>
               <div class="_status">publish</div>
               <div class="jj">15</div>
               <div class="mm">03</div>
               <div class="aa">2017</div>
               <div class="hh">06</div>
               <div class="mn">30</div>
               <div class="ss">19</div>
               <div class="post_password"></div>
               <div class="page_template">default</div>
               <div class="post_category" id="category_832">14</div>
               <div class="tags_input" id="post_tag_832"></div>
               <div class="sticky"></div>
               <div class="post_format"></div>
            </div>
            <div class="row-actions"><span class="edit"><a href="https://dev.op.life/wp-admin/post.php?post=832&amp;action=edit" aria-label="Edit “Trekkers United”">Edit</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" aria-label="Quick edit “Trekkers United” inline">Quick&nbsp;Edit</a> | </span><span class="trash"><a href="https://dev.op.life/wp-admin/post.php?post=832&amp;action=trash&amp;_wpnonce=8398d643d0" class="submitdelete" aria-label="Move “Trekkers United” to the Trash">Trash</a> | </span><span class="view"><a href="https://dev.op.life/trekkersunited/" rel="permalink" aria-label="View “Trekkers United”">View</a></span></div>
            <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
         </td>
         <td class="author column-author" data-colname="Author"><a href="edit.php?post_type=post&amp;author=1">Outpostlife</a></td>
         <td class="categories column-categories" data-colname="Categories"><a href="edit.php?category_name=join-the-adventure">Join the Adventure!</a></td>
         <td class="tags column-tags" data-colname="Tags"><span aria-hidden="true">—</span><span class="screen-reader-text">No tags</span></td>
         <td class="comments column-comments" data-colname="Comments">
            <div class="post-com-count-wrapper">
               <span aria-hidden="true">—</span><span class="screen-reader-text">No comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No comments</span></span>		
            </div>
         </td>
         <td class="date column-date" data-colname="Date">Published<br><abbr title="2017/03/15 6:30:19 am">2017/03/15</abbr></td>
         <td class="wpseo-score column-wpseo-score" data-colname="SEO">
            <div aria-hidden="true" title="Focus keyword not set." class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Focus keyword not set.</span>
         </td>
         <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability">
            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Not available</span>
         </td>
         <td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Trekkers United - Outpost</td>
         <td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td>
         <td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Focus KW"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyword not set.</span></td>
         <td class="ws_plugin__s2member_pro_lock_icons column-ws_plugin__s2member_pro_lock_icons" data-colname="(s2)"><span style="cursor:help;" title="Publicly Available">—</span></td>
      </tr>
      <tr id="post-1935" class="iedit author-self level-0 post-1935 type-post status-publish format-video hentry category-general-store post_format-post-format-video">
         <th scope="row" class="check-column">
            <label class="screen-reader-text" for="cb-select-1935">Select New Mug in Shop</label>
            <input id="cb-select-1935" type="checkbox" name="post[]" value="1935">
            <div class="locked-indicator">
               <span class="locked-indicator-icon" aria-hidden="true"></span>
               <span class="screen-reader-text">“New Mug in Shop” is locked</span>
            </div>
         </th>
         <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
            <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
            <strong><a href="edit.php?post_format=video&amp;post_type=post" class="post-state-format post-format-icon post-format-video">Video:</a><a class="row-title" href="https://dev.op.life/wp-admin/post.php?post=1935&amp;action=edit" aria-label="“New Mug in Shop” (Edit)">New Mug in Shop</a></strong>
            <div class="hidden" id="inline_1935">
               <div class="post_title">New Mug in Shop</div>
               <div class="post_name">newmug</div>
               <div class="post_author">1</div>
               <div class="comment_status">open</div>
               <div class="ping_status">open</div>
               <div class="_status">publish</div>
               <div class="jj">15</div>
               <div class="mm">03</div>
               <div class="aa">2017</div>
               <div class="hh">06</div>
               <div class="mn">00</div>
               <div class="ss">03</div>
               <div class="post_password"></div>
               <div class="page_template">default</div>
               <div class="post_category" id="category_1935">17</div>
               <div class="tags_input" id="post_tag_1935"></div>
               <div class="sticky"></div>
               <div class="post_format">video</div>
            </div>
            <div class="row-actions"><span class="edit"><a href="https://dev.op.life/wp-admin/post.php?post=1935&amp;action=edit" aria-label="Edit “New Mug in Shop”">Edit</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" aria-label="Quick edit “New Mug in Shop” inline">Quick&nbsp;Edit</a> | </span><span class="trash"><a href="https://dev.op.life/wp-admin/post.php?post=1935&amp;action=trash&amp;_wpnonce=c8db0103b2" class="submitdelete" aria-label="Move “New Mug in Shop” to the Trash">Trash</a> | </span><span class="view"><a href="https://dev.op.life/newmug/" rel="permalink" aria-label="View “New Mug in Shop”">View</a></span></div>
            <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
         </td>
         <td class="author column-author" data-colname="Author"><a href="edit.php?post_type=post&amp;author=1">Outpostlife</a></td>
         <td class="categories column-categories" data-colname="Categories"><a href="edit.php?category_name=general-store">General Store</a></td>
         <td class="tags column-tags" data-colname="Tags"><span aria-hidden="true">—</span><span class="screen-reader-text">No tags</span></td>
         <td class="comments column-comments" data-colname="Comments">
            <div class="post-com-count-wrapper">
               <span aria-hidden="true">—</span><span class="screen-reader-text">No comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No comments</span></span>		
            </div>
         </td>
         <td class="date column-date" data-colname="Date">Published<br><abbr title="2017/03/15 6:00:03 am">2017/03/15</abbr></td>
         <td class="wpseo-score column-wpseo-score" data-colname="SEO">
            <div aria-hidden="true" title="Focus keyword not set." class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Focus keyword not set.</span>
         </td>
         <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability">
            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Not available</span>
         </td>
         <td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">New Mug in Shop - Outpost</td>
         <td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td>
         <td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Focus KW"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyword not set.</span></td>
         <td class="ws_plugin__s2member_pro_lock_icons column-ws_plugin__s2member_pro_lock_icons" data-colname="(s2)"><span style="cursor:help;" title="Publicly Available">—</span></td>
      </tr>
      <tr id="post-2391" class="iedit author-self level-0 post-2391 type-post status-draft format-standard has-post-thumbnail hentry category-uncategorized">
         <th scope="row" class="check-column">
            <label class="screen-reader-text" for="cb-select-2391">Select Tester</label>
            <input id="cb-select-2391" type="checkbox" name="post[]" value="2391">
            <div class="locked-indicator">
               <span class="locked-indicator-icon" aria-hidden="true"></span>
               <span class="screen-reader-text">“Tester” is locked</span>
            </div>
         </th>
         <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
            <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
            <strong><a class="row-title" href="https://dev.op.life/wp-admin/post.php?post=2391&amp;action=edit" aria-label="“Tester” (Edit)">Tester</a> — <span class="post-state">Draft</span></strong>
            <div class="hidden" id="inline_2391">
               <div class="post_title">Tester</div>
               <div class="post_name">tester</div>
               <div class="post_author">1</div>
               <div class="comment_status">open</div>
               <div class="ping_status">open</div>
               <div class="_status">draft</div>
               <div class="jj">11</div>
               <div class="mm">03</div>
               <div class="aa">2017</div>
               <div class="hh">02</div>
               <div class="mn">39</div>
               <div class="ss">15</div>
               <div class="post_password"></div>
               <div class="page_template">default</div>
               <div class="post_category" id="category_2391">1</div>
               <div class="tags_input" id="post_tag_2391"></div>
               <div class="sticky"></div>
               <div class="post_format"></div>
            </div>
            <div class="row-actions"><span class="edit"><a href="https://dev.op.life/wp-admin/post.php?post=2391&amp;action=edit" aria-label="Edit “Tester”">Edit</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" aria-label="Quick edit “Tester” inline">Quick&nbsp;Edit</a> | </span><span class="trash"><a href="https://dev.op.life/wp-admin/post.php?post=2391&amp;action=trash&amp;_wpnonce=098d78f5cb" class="submitdelete" aria-label="Move “Tester” to the Trash">Trash</a> | </span><span class="view"><a href="https://dev.op.life/?p=2391&amp;preview=true" rel="permalink" aria-label="Preview “Tester”">Preview</a></span></div>
            <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
         </td>
         <td class="author column-author" data-colname="Author"><a href="edit.php?post_type=post&amp;author=1">Outpostlife</a></td>
         <td class="categories column-categories" data-colname="Categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td>
         <td class="tags column-tags" data-colname="Tags"><span aria-hidden="true">—</span><span class="screen-reader-text">No tags</span></td>
         <td class="comments column-comments" data-colname="Comments">
            <div class="post-com-count-wrapper">
               <span aria-hidden="true">—</span><span class="screen-reader-text">No comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No comments</span></span>		
            </div>
         </td>
         <td class="date column-date" data-colname="Date">Last Modified<br><abbr title="2017/03/11 2:39:15 am">2017/03/11</abbr></td>
         <td class="wpseo-score column-wpseo-score" data-colname="SEO">
            <div aria-hidden="true" title="Focus keyword not set." class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Focus keyword not set.</span>
         </td>
         <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability">
            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div>
            <span class="screen-reader-text">Not available</span>
         </td>
         <td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Tester - Outpost</td>
         <td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td>
         <td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Focus KW"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyword not set.</span></td>
         <td class="ws_plugin__s2member_pro_lock_icons column-ws_plugin__s2member_pro_lock_icons" data-colname="(s2)"><span style="cursor:help;" title="Publicly Available">—</span></td>
      </tr>
   </tbody>
   <tfoot>
      <tr>
         <td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox"></td>
         <th scope="col" class="manage-column column-title column-primary sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" class="manage-column column-author">Author</th>
         <th scope="col" class="manage-column column-categories">Categories</th>
         <th scope="col" class="manage-column column-tags">Tags</th>
         <th scope="col" class="manage-column column-comments num sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th>
         <th scope="col" class="manage-column column-date sortable asc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" class="manage-column column-wpseo-score">SEO</th>
         <th scope="col" class="manage-column column-wpseo-score-readability">Readability</th>
         <th scope="col" class="manage-column column-wpseo-title hidden">SEO Title</th>
         <th scope="col" class="manage-column column-wpseo-metadesc hidden sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=wpseo-metadesc&amp;order=asc"><span>Meta Desc.</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" class="manage-column column-wpseo-focuskw hidden sortable desc"><a href="https://dev.op.life/wp-admin/edit.php?orderby=wpseo-focuskw&amp;order=asc"><span>Focus KW</span><span class="sorting-indicator"></span></a></th>
         <th scope="col" class="manage-column column-ws_plugin__s2member_pro_lock_icons">(s2)</th>
      </tr>
   </tfoot>
</table>
<div class="tablenav bottom">
   <div class="alignleft actions bulkactions">
      <label for="bulk-action-selector-bottom" class="screen-reader-text">Select bulk action</label>
      <select name="action2" id="bulk-action-selector-bottom">
         <option value="-1">Bulk Actions</option>
         <option value="edit" class="hide-if-no-js">Edit</option>
         <option value="trash">Move to Trash</option>
      </select>
      <input type="submit" id="doaction2" class="button action" value="Apply">
   </div>
   <div class="alignleft actions">
   </div>
   <div class="tablenav-pages one-page"><span class="displaying-num">4 items</span>
      <span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
      <span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
      <span class="screen-reader-text">Current Page</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 of <span class="total-pages">1</span></span></span>
      <span class="tablenav-pages-navspan" aria-hidden="true">›</span>
      <span class="tablenav-pages-navspan" aria-hidden="true">»</span></span>
   </div>
   <br class="clear">
</div>';

	public static function getPage(){
		global $wpdb;
		$table_name = $wpdb->prefix . "awss3videolibrary_videogroups";
		$retrieve_data = $wpdb->get_results( "SELECT * FROM $table_name" );
		print_r($retrieve_data);
		echo self::templateHTML;
	}
 }
