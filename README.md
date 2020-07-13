<h1 align="center">PHP Alfred Workflow Workflow</h1>

<p align="center">
    <a href="https://packagist.org/packages/godbout/alfred-workflow-workflow"><img src="https://poser.pugx.org/godbout/alfred-workflow-workflow/v/stable" alt="Latest Stable Version"></a>
    <a href="https://travis-ci.com/godbout/alfred-workflow-workflow"><img src="https://img.shields.io/travis/com/godbout/alfred-workflow-workflow/master.svg" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/godbout/alfred-workflow-workflow"><img src="https://img.shields.io/scrutinizer/g/godbout/alfred-workflow-workflow.svg" alt="Quality Score"></a>
    <a href="https://scrutinizer-ci.com/g/godbout/alfred-workflow-workflow"><img src="https://scrutinizer-ci.com/g/godbout/alfred-workflow-workflow/badges/coverage.png?b=master" alt="Code Coverage"></a>
    <a href="https://packagist.org/packages/godbout/alfred-workflow-workflow"><img src="https://poser.pugx.org/godbout/alfred-workflow-workflow/downloads" alt="Total Downloads"></a>
</p>

<p align="center">
    Tired of writing the same code over and over just to get your new Workflow up and running? Yeah me too.
</p>

___

## DOUBLE WHAMMY WORKFLOW

An [Alfred](https://alfredapp.com/) [Workflow](https://www.alfredapp.com/workflows/) does only two things: 

    1. show results  
    2. do an action  
    2.5. ok send a notification, maybe

which means, why typing over and over those same stuff over and over. I say stop to wasting keyboard keys. (Even more if you work on a MacBook because the keyboard will break soon.)

## BUT WTF IS THAT, REALLY

Basically it's a set of base classes and some conventions and an Alfred Workflow Skeleton to get you up in no time. Follow the conventions and all you have to do is create your Menus, and your Actions. All the boring rest is handled by the Skeleton, and this package. The common glue is taken care of. You focus only on the specificity of your Workflow.

## Installation

```bash
composer require godbout/alfred-workflow-workflow
```

## Usage

Have your own `Workflow` class extend `BaseWorkflow`:

```php
<?php

namespace Me\MyDummyWorkflow;

use Godbout\Alfred\Workflow\BaseWorkflow;

class Workflow extends BaseWorkflow
{
    // your Workflow actions go here
}
```

## The Conventions

Well this is where it gets interesting, because i'm still not sure how to express it. Best currently is to go through different use cases together. See the three cases below.

### Case 1: Alfred Ploi

This is the most straightforward Workflow. It doesn't override anything so it follows all the conventions, and only defines what it specifically needs.

1. The Workflow Class only needs to define the possible actions of the Workflow: https://github.com/godbout/alfred-ploi/blob/0.1.0/src/Workflow.php
2. The `Entrance` Menu Class defines what should be shown to the Alfred user when they start the Workflow: https://github.com/godbout/alfred-ploi/blob/0.1.0/src/Menus/Entrance.php. `Entrance` is a convention for the first Menu of your Workflow (although you can name it whatever you want, but then you need to override the `currentMenu` method. See [Alfred Time](#case-3-alfred-time) below). All other Menus can be called whatever you want, as they will be defined as `args` of your Menu Items.
3. The script called by Alfred only checks whether you're showing a Menu or calling an Action: https://github.com/godbout/alfred-ploi/blob/0.1.0/src/app.php

That's it. Just pass the right `args` and `variables` according to the conventions and it just works.

Check the Alfred Ploi Workflow for the Workflow Skeleton: https://github.com/godbout/alfred-ploi/releases/tag/0.1.0 

### Case 2: Alfred Kat

This Workflow overrides only the `do` and `notify` methods.

1. The `do` method needs a specific argument, so it is overriden: https://github.com/godbout/alfred-kat/tree/4.1.0/src/Workflow.php#L10
2. The `notify` method needs to send different notifications, so it is overriden too: https://github.com/godbout/alfred-kat/tree/4.1.0/src/Workflow.php#L21
3. The Menus (only one in this case) are not overriden: https://github.com/godbout/alfred-kat/tree/4.1.0/src/Menus/Entrance.php

All the rest of the wiring is handled by this package, and the Alfred Workflow Skeleton: https://github.com/godbout/alfred-kat/releases/tag/4.1.0

### Case 3: Alfred Time

This is the hardest one. It overrides:

1. The `do` method, passing an argument, sometimes: https://github.com/godbout/alfred-time/blob/3.0.0/src/Workflow.php#L37
2. The `notify` method, for custom messages: https://github.com/godbout/alfred-time/blob/3.0.0/src/Workflow.php#L52
3. The way Menus are loaded, because in this Workflow, Menus are arranged in specific (Timer Services) folders: https://github.com/godbout/alfred-time/blob/3.0.0/src/Workflow.php#L30

And yet, even in this case, most of the code is just specific code for this particular Workflow. Most of the Alfred wiring is handled by this package, and the Workflow Skeleton: https://github.com/godbout/alfred-time/releases/tag/3.0.0

### Args and Variables
