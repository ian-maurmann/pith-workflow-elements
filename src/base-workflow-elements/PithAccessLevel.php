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
 * Pith Access Level (extend)
 * ---------------------------
 *
 * @noinspection PhpMethodNamingConventionInspection - Long method names are ok here.
 */



declare(strict_types=1);


namespace Pith\Workflow;


/**
 * Class PithAccessLevel
 * @package pith-workflow
 */
class PithAccessLevel
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'NOT NAMED';
    }


    /**
     * @return bool
     */
    public function isAllowedToAccess(): bool
    {
        // Placeholder

        return false;
    }
}