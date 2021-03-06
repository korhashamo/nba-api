<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\TeamAndPlayer;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\PlayerIdParam;
use JasonRoman\NbaApi\Params\SeasonParam;
use JasonRoman\NbaApi\Params\Stats\ConferenceParam;
use JasonRoman\NbaApi\Params\Stats\DivisionParam;
use JasonRoman\NbaApi\Params\Stats\GameSegmentParam;
use JasonRoman\NbaApi\Params\Stats\LastNGamesParam;
use JasonRoman\NbaApi\Params\Stats\LocationParam;
use JasonRoman\NbaApi\Params\Stats\MeasureTypeParam;
use JasonRoman\NbaApi\Params\Stats\MonthParam;
use JasonRoman\NbaApi\Params\Stats\OutcomeParam;
use JasonRoman\NbaApi\Params\Stats\PeriodParam;
use JasonRoman\NbaApi\Params\Stats\PerModeParam;
use JasonRoman\NbaApi\Params\Stats\SeasonSegmentParam;
use JasonRoman\NbaApi\Params\Stats\SeasonTypeParam;
use JasonRoman\NbaApi\Params\Stats\ShotClockRangeParam;
use JasonRoman\NbaApi\Params\TeamIdParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Impact / Traditional stats.
 *
 * @link http://stats.nba.com/impact
 */
class TeamAndPlayerVsPlayersRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/teamandplayersvsplayers';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(MeasureTypeParam::OPTIONS)
     *
     * @var string
     */
    public $measureType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PerModeParam::OPTIONS_ALL)
     *
     * @var string
     */
    public $perMode;

    /**
     * @Assert\NotNull()
     * @Assert\Type("bool")
     *
     * @var bool
     */
    public $plusMinus;

    /**
     * @Assert\NotNull()
     * @Assert\Type("bool")
     *
     * @var bool
     */
    public $paceAdjust;

    /**
     * @Assert\NotNull()
     * @Assert\Type("bool")
     *
     * @var bool
     */
    public $rank;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LeagueIdParam::OPTIONS_NBA_G_LEAGUE)
     *
     * @var string
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(SeasonParam::FORMAT)
     *
     * @var string
     */
    public $season;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonTypeParam::OPTIONS)
     *
     * @var string
     */
    public $seasonType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = TeamIdParam::MIN, max = TeamIdParam::MAX)
     *
     * @var int
     */
    public $teamId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId1;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId2;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId3;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId4;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId5;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(OutcomeParam::OPTIONS)
     *
     * @var string
     */
    public $outcome;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LocationParam::OPTIONS)
     *
     * @var string
     */
    public $location;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = MonthParam::MIN_ALL, max = MonthParam::MAX)
     *
     * @var int
     */
    public $month;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonSegmentParam::OPTIONS)
     *
     * @var string
     */
    public $seasonSegment;

    /**
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $dateFrom;

    /**
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $dateTo;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = TeamIdParam::MIN_ALL, max = TeamIdParam::MAX)
     *
     * @var int
     */
    public $opponentTeamId;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(ConferenceParam::OPTIONS)
     *
     * @var string
     */
    public $vsConference;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(DivisionParam::OPTIONS_WITH_CONFERENCE)
     *
     * @var string
     */
    public $vsDivision;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(ConferenceParam::OPTIONS)
     *
     * @var string
     */
    public $conference;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(DivisionParam::OPTIONS_WITH_CONFERENCE)
     *
     * @var string
     */
    public $division;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(GameSegmentParam::OPTIONS)
     *
     * @var string
     */
    public $gameSegment;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PeriodParam::MIN_ALL, max = PeriodParam::MAX)
     *
     * @var int
     */
    public $period;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(ShotClockRangeParam::OPTIONS)
     *
     * @var string
     */
    public $shotClockRange;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = LastNGamesParam::MIN_ALL, max = LastNGamesParam::MAX)
     *
     * @var int
     */
    public $lastNGames;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = TeamIdParam::MIN, max = TeamIdParam::MAX)
     *
     * @var int
     */
    public $vsTeamId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $vsPlayerId1;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $vsPlayerId2;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $vsPlayerId3;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $vsPlayerId4;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN_ALT, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $vsPlayerId5;

    /**
     * {@inheritdoc}
     */
    public static function getDefaultValues(): array
    {
        return array_merge(parent::getExampleValues(), [
            'playerId1'   => 2544,
            'playerId2'   => 0,
            'playerId3'   => 0,
            'playerId4'   => 0,
            'playerId5'   => 0,
            'vsPlayerId2' => 0,
            'vsPlayerId3' => 0,
            'vsPlayerId4' => 0,
            'vsPlayerId5' => 0,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExampleValues(): array
    {
        return array_merge(parent::getExampleValues(), [
            'vsTeamId'    => TeamIdParam::GOLDEN_STATE_WARRIORS,
            'vsPlayerId1' => PlayerIdParam::getExampleValue(),
        ]);
    }
}