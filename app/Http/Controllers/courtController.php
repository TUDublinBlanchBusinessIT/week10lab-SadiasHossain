<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecourtRequest;
use App\Http\Requests\UpdatecourtRequest;
use App\Repositories\courtRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class courtController extends AppBaseController
{
    /** @var courtRepository $courtRepository*/
    private $courtRepository;

    public function __construct(courtRepository $courtRepo)
    {
        $this->courtRepository = $courtRepo;
    }

    /**
     * Display a listing of the court.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courts = $this->courtRepository->all();

        return view('courts.index')
            ->with('courts', $courts);
    }

    /**
     * Show the form for creating a new court.
     *
     * @return Response
     */
    public function create()
    {
        return view('courts.create');
    }

    /**
     * Store a newly created court in storage.
     *
     * @param CreatecourtRequest $request
     *
     * @return Response
     */
    public function store(CreatecourtRequest $request)
    {
        $input = $request->all();

        $court = $this->courtRepository->create($input);

        Flash::success('Court saved successfully.');

        return redirect(route('courts.index'));
    }

    /**
     * Display the specified court.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        return view('courts.show')->with('court', $court);
    }

    /**
     * Show the form for editing the specified court.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        return view('courts.edit')->with('court', $court);
    }

    /**
     * Update the specified court in storage.
     *
     * @param int $id
     * @param UpdatecourtRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecourtRequest $request)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        $court = $this->courtRepository->update($request->all(), $id);

        Flash::success('Court updated successfully.');

        return redirect(route('courts.index'));
    }

    /**
     * Remove the specified court from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $court = $this->courtRepository->find($id);

        if (empty($court)) {
            Flash::error('Court not found');

            return redirect(route('courts.index'));
        }

        $this->courtRepository->delete($id);

        Flash::success('Court deleted successfully.');

        return redirect(route('courts.index'));
    }
}
