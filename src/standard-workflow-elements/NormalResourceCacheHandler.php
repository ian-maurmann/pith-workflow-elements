<?php
# ===================================================================
# Copyright (c) 2008-2025 Ian K Maurmann. The Pith Framework is
# provided under the terms of the Mozilla Public License, v. 2.0
#
# This Source Code Form is subject to the terms of the Mozilla Public
# License, v. 2.0. If a copy of the MPL was not distributed with this
# file, You can obtain one at http://mozilla.org/MPL/2.0/.
# ===================================================================


/**
 * Normal Resource Cache Handler
 * -----------------------------
 *
 *
 * @noinspection PhpUnused - Ignore, will be extended.
 */

declare(strict_types=1);

namespace Pith\Workflow\StandardWorkflowElements;

use Pith\Workflow\PithCacheControlHeaderHandler;

/**
 * Class NormalResourceCacheHandler
 */
class NormalResourceCacheHandler extends PithCacheControlHeaderHandler
{
    public function handleCacheControlHeader()
    {
        // Set the Cache-Control header
        header('Cache-Control: public, max-age=31536000, immutable, stale-while-revalidate=604800, stale-if-error=1209600', true);
    }
}