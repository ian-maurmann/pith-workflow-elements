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
 * Empty Preparer
 * --------------
 *
 * @noinspection PhpMissingParentCallCommonInspection - Preparer parent methods exist as fallback.
 */


declare(strict_types=1);

namespace Pith\Workflow\GracefulFallback;

use Pith\Workflow\PithPreparer;

/**
 * Class EmptyPreparer
 * @package pith-workflow
 */
class EmptyPreparer extends PithPreparer
{
    public function runPreparer()
    {
        // Do nothing for now.
    }
}